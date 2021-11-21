<?php 

class Posts extends Connection 
{   
    public $alertPost = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function InsertPost($table)   // insertuje sve postove u bazi
    {
        $title = filter_input(INPUT_POST,"insert_title",FILTER_SANITIZE_STRING);
        $area_image = "pictures/".basename($_FILES['insert_picture']['name']); 
        $tmp = $_FILES['insert_picture']['tmp_name'];
        $description = filter_input(INPUT_POST,"insert_description",FILTER_SANITIZE_STRING);

        move_uploaded_file($tmp, $area_image);
        
        $sql = " INSERT INTO {$table} VALUES(NULL,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$title,$area_image, $description]);

        if ($query) {
            $this->alertPost = true;
        }
    }
    public function SelectAllPost($table)      // selektuje sve napitke, bee_product itd. iz baze
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
        $getPost = $query->fetchall(PDO::FETCH_OBJ);
        // var_dump($getPost);
        return $getPost;
    }
    public function SelectSinglPost($table)
    {

        // Ovo $table koja prima argumente je samo ime koje mi oznacava da ta funkcija prima podatke iz tabele u bazi. Kada pozovem metodu ona mi trazi da moram da posaljem podatak
        // za $table, a ja saljem ovde podatke iz fajla singl.drink.php.



        // Ovde sam  dao dve varijable, dva podatka. Ova funkcija radi i otvara sve singl kartice za drink i za bee_product iz baze ali izbazi obavestenje koje izgleda ovako:
        // Notice: Undefined index: id_beeProduct in C:\xampp\htdocs\AloeQuestion\Class\Posts.php on line 49   -   da kada otvorim 
        // npr karticu na sajtu drink - napici kako je u sajtu on otvori i pita me koja je to varijabla $id_bee isto se desava i kada bude suprotno. Moje pitanje glasi 
        // da li mogu u jednoj funkciji da ima ova dva podatka koja su prikazana :
        // $id i $id_bee da bi mi jedan funkcija resavala otvaranje singl kartice. Resenje imam ali sam hteo da sto vise uprostim cod.
        $id = $_GET['id'];
        $id_bee = $_GET['id_beeProduct'];


        $sql = "SELECT * FROM {$table} WHERE id = ? OR id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id,$id_bee]);
        $singlPost = $query->fetch(PDO::FETCH_OBJ);
        // var_dump($singlPost);
        return $singlPost;
            

    }
}


?>