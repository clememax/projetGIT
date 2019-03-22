<?php

$pdo = new PDO('mysql:host=localhost;dbname=abonnes', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
//La connexion au site 
if (isset($_POST['login'])){
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    //Associer les mots de pass et le login avec l'indentification
    $result =  $pdo -> query("SELECT id_identification FROM identification WHERE mail='$login' AND password='$pwd'");
   echo "nombre de resultat" .$result -> rowCount();
   $valid = $result -> rowCount();
  
  
  //si les ID sont ok redirection vers une autre page
   $x=$result -> fetch();
  $id_identification=$x['id_identification'];
   

   if($valid == 1){
       header ('Location: article.php?id_identification='.$id_identification);
      
       exit;
   }

}



?>

<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src=""></script>
    iygubhyi
</head>
<body>
<form method="POST" action="index.php">
  <div class="row">
      <input type="text" class="form-control" name="login" placeholder="login">
      <input type="text" class="form-control" name="pwd" placeholder="mot de passe">
  </div>
  <input type="submit" class="">
</form>

</body>
</html>
