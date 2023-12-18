<?php require '../config/connexion.php';

if (isset($_GET['id'] )) {
    $id=$_POST['id_acticl'];
    
    $res= $article->updateData("article","titre = $_POST[titre], $_POST[contenu]","WHERE id =$id");
   
    if($res) header("Location:./acceuil.php");  
    
}
 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])){
    $res= $article->insertData("article",["titre", "contenu", "personne_id"],["$_POST[titre]","$_POST[contenu]","1"]);
   
    if($res) header("Location:./acceuil.php");
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete'])) {
    $article_id=$_POST["article_id"];

    $res= $article->deleteData("article",$article_id);
   
    if($res) header("Location:./acceuil.php");

}


