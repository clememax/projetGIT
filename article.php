<?php

$pdo = new PDO('mysql:host=localhost;dbname=abonnes', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

// Création d'un article
$id_identification = $_GET['id_identification'];

if (isset($_POST['article']) && isset($_POST['titre']) && isset($_POST['art'])){
   $titre = $_POST['titre'];
   $art = $_POST['art'];

   $pdo -> query("INSERT INTO article (id_identification, titre,  art, date_parution) VALUES ('$id_identification', '$titre', '$art',CURDATE())");

}
//Je récupère le nom et le prénom de l'identifié
$bonjour=$pdo -> query("SELECT nom,prenom FROM identification WHERE id_identification=$id_identification");
$result=$bonjour -> fetch();
echo 'BONJOUR : ' .$result['prenom'].'  '.$result['nom'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <form method="POST" action="article.php">
     
      <input type="text" class="col-lg-2 offset-lg-5" name="titre" placeholder="titre">
      </br>
      </br>
      <textarea name="art"  class="col-lg-2 offset-lg-5" placeholder="art"></textarea>
      </br>
      <br>
      <select class="form-control col-lg-2 offset-lg-5"  id="exampleFormControlSelect2">
      <option value="culture" class="col-lg-2">Culture POP</option>
      <option value=sport>Sport</option>
      <option value="cuisine">cuisine</option>
      <option value="actualite">actualité</option>
      <option value="mode">mode</option>
      <option value="tunning">tunning</option>
    </select>
    </br>
      <input type="submit" class="btn btn-primary col-lg-2 offset-lg-5">
  </form>
</body>

</html>