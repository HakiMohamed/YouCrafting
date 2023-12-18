

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajouter nouveau Article</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>



<div class="container mt-5  p-5 bg-secondary">
  <h4 style="color:white;">
  <?php 
  require "../config/connexion.php";

if(isset($_GET['id'])){

echo"Modifier votre article";

$id=$_GET['id'];
$articles = new DataBase();
   $result= $articles->showData("article ",["titre", "contenu", "date_de_creation", "personne_id"],"WHERE id = $id");
   

   foreach($result as $row);  
   } 
else{
  echo"Ajouter une nouvelle Article";
}




  
 

?>

?></h4>
  <form action="traitement.php" method="POST"  >
    <div class="form-group">
      <label for="titre">Titre :</label>
      <input type="text" value="<?php if(isset($_GET['id'])) echo$row['titre'] ?>" class="form-control" id="titre" name="titre" required>
      <input type="hidden" value="<?php if(isset($_GET['id'])) echo$row['titre'] ?>"   name="id_acticl" required>
    </div>
    
    <div class="form-group">
      <label for="contenu">Contenu :</label>
      <textarea class="form-control" id="contenu"  name="contenu" rows="5" required><?php if(isset($_GET['id'])) echo$row['contenu'] ?></textarea>
    </div>
    <button type="submit" name="<?php 
if(isset($_GET['id']))

echo"update";
else{
  echo"submit";
}

?>" class="btn btn-primary"> <?php 
if(isset($_GET['id']))

echo"valider les modifications";
else{
  echo"Ajouter l'Article";
}?>

 </button>
  </form>
</div>


<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
