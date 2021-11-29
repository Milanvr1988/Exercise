<?php 

class Posts
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
}


?>