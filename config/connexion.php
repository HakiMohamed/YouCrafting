<?php


   class DataBase {

    protected  $con;

    public function __construct($db_host="localhost",$db_name="youcraft",$db_user="root",$db_pass=""){
        $this->con= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
    }

    public function showData($table,$colum,$condition){
        $colum=implode(",",$colum);
        $stmt=$this->con->prepare("SELECT {$colum} FROM {$table}{$condition} ");
         $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function insertData($table,$colum,$values){
        $colum=implode(",",$colum);
        $values=implode("','",$values);
        $stmt=$this->con->prepare("INSERT INTO {$table} ({$colum}) VALUES ('{$values}') ");
        return $stmt->execute();
    }
    public function updateData($table,$data,$condition){
        $data=implode(",",$data);
        $stmt=$this->con->prepare("UPDATE  {$table} SET ({$data}) {$condition} ");
        return $stmt->execute();
    }
    public function deleteData($table,$condition){
        $stmt=$this->con->prepare(" DELETE FROM {$table} WHERE id = {$condition} ");
        return $stmt->execute();
    }




    public function __destruct(){
        $this->con=null;
    }



   }
   $article = new DataBase();
   $result= $article->showData("article ",["id", "titre", "contenu", "date_de_creation", "personne_id"],"");
   