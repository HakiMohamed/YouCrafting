<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajouter nouveau Article</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-3  p-5 bg-secondary">
  <h2>Ajouter nouveau Article</h2>
  <form action="traitement.php" method="POST"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="titre">Titre :</label>
      <input type="text" class="form-control" id="titre" name="titre" required>
    </div>
    <div class="form-group">
      <label for="image">thumbnail_picture :</label>
      <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
      <label for="contenu">Contenu :</label>
      <textarea class="form-control" id="contenu" name="contenu" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Insérer l'article</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
