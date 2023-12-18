<?php   require '../config/connexion.php'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.x.x/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YouCrafitng</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active  " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link active btn btn-success" aria-current="page" href="#">Login</a>
        </li>
        <li class="nav-item mx-1 ">
          <a class="nav-link active btn btn-primary" aria-current="page" href="#">Register</a>
        </li>
       
       
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="container my-5">
    <div class="row align-items-center">

        
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="../imgs/mw-articles-700px.jpg" class="img-fluid img-thumbnail " alt="imaged'acceuil">
        </div>

        
        <div class="col-md-6">
            <h2 class="mb-4">À propos de nous</h2>
            <p class="lead">

            Bienvenue sur notre plateforme dédiée à la création et à la découverte d'articles inspirants et informatifs. Chez nous, l'écriture devient une porte ouverte à l'imagination, un espace où chaque passion, chaque idée, trouve sa place. Que vous soyez un créateur en herbe ou un lecteur avide de nouvelles découvertes, notre communauté dynamique vous invite à explorer, à partager et à enrichir cette bibliothèque virtuelle, façonnée par la diversité de vos expériences et de vos récits. Rejoignez-nous dans cette aventure littéraire où chaque mot compte et où chaque contribution est une pierre précieuse à l'édifice de la connaissance partagée.            </p>
            
            <a href="#" class="btn btn-primary mt-3 ">En savoir plus</a>
            <a href="./insererArticle.php" class="btn btn-primary mt-3 ">Crée Votre article</a>
        </div>

    </div>
</section>
  


<div class="container">
<div class="col-md-12">
        

        <h2 class="mb-4">Articles</h2>
        <div class="row">

            <?php   foreach($result as $row):    ?>
          
          <div class="col-md-3 mt-3 mb-2">
            <div class="card ">
              <img src="../imgs/article-writing.jpg" class="img-fluid img-thumbnail" alt="gfhj">
               <div class="card-body">
                 <h5 class="card-title"><?=$row['titre']?></h5>
                 <p class="card-text">
                 <?=$row['contenu']?>
                 </p>
                 <h6 class="card-title">L'auteur : <strong>ksnapiz</strong></h6>
                 <h6 class="card-title"></h6>
                 <div class="d-flex ">
                  <form method="POST" action="./traitement.php" >
                  <input type="hidden" name="article_id" value="<?= $row['id'] ?>">
                  <a href="./insererArticle.php?id=<?= $row['id'] ?>"  class="btn btn-outline-success ">update</a>
                 <button  type="submit" name="delete" class="btn btn-outline-danger ">delete</button>
                 <button type="submit" name="more" class="btn btn-outline-primary ">more</button>
                 </form>
                 
               </div>
              </div>
            </div>
          </div>
     <?php    endforeach;   ?>
          
        

          
          

          
          

        </div>


      </div>
     </div>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.x.x/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>