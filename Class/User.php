<?php 

class User
{
    public $registerPopUp = null;
    public $alertForm = null;
    public $loginPopUp = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function registerUser()
    {

        $name = filter_input(INPUT_POST,'register_name',FILTER_SANITIZE_STRING);
        $surname = filter_input(INPUT_POST,'register_surname',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'register_email',FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST,'register_password',FILTER_SANITIZE_STRING);  

        if ( strlen($name)>=3 && strlen($name)<=30 && strlen($surname)>=3 && strlen($surname)<=30 && strlen($email)>=3 && strlen($email)<=30 )
        {
            $sql = "INSERT INTO user VALUES (Null,?,?,?,?)";
            $query = $this->db->prepare($sql);
            $query->execute([$name,$surname,$email,$password]);

            if ($query) {
                $this->registerPopUp = true;
            }
        }else {
            $this->alertForm = true;
        }

    }
    public function LoginUser()
    {
        $email = filter_input(INPUT_POST,'log_email',FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'log_password',FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM user WHERE email=? AND password=?";
        $query = $this->db->prepare($sql);
        $query->execute([$email,$password]);
        $loginUser = $query->fetch(PDO::FETCH_OBJ);

        // var_dump($loginUser);

        if ($loginUser) {
            $_SESSION['loggedUser'] = $loginUser;           
        }elseif (!$loginUser) {
            $this->loginPopUp = true;
        }
        if ($loginUser) {
            header('Location:index.php');
        }
    }

}


?>