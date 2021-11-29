<?php 

class BaseModel  
{
    
    public function __construct($db)
    {
        $this->db = $db;
        
    }


    public function SelectSinglPost($id)
    {

        // $id = $_GET['id'];
        // $id = $_GET['id_beeProduct'];


        $sql = "SELECT * FROM $this->table WHERE id = ? OR id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id,$id]);
        $singlPost = $query->fetch(PDO::FETCH_OBJ);
        // var_dump($singlPost);
        return $singlPost;
    }
}



?>