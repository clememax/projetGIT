
<?php

/*
$mysqli = new mysqli('localhost','root','','entreprise'); //connection à une base de donnée mysql

$resultat = $mysqli -> query("SELECT nom, prenom FROM employes ORDER BY salaire DESC LIMIT 0,1;");
*/
$pdo = new PDO('mysql:host=localhost;dbname=abonnes', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
/*$employe = $resultat -> fetch_assoc();
print_r($employe);
echo "prenom : " .$employe['prenom'];*/





/*$pdo -> query("INSERT INTO employes (nom, prenom, mail, service, date_embauche, salaire) VALUES ('GEORGE', 'MICHAEL', 'F', 'informatique', '2011-12-28', 1800)");/*$mysqli*/
/*$res = $pdo -> query("SELECT nom, prenom FROM employes WHERE prenom LIKE 'ge%'");/* $mysqli*/

/*var_dump($res);
$nouveau = $res -> fetch();

print_r($nouveau);
echo "</br>monsieur : " .$nouveau['prenom'];*/
print_r($_POST);

if(isset($_POST["nom"])&& isset($_POST["prenom"])&& isset($_POST["mail"])&& isset($_POST["password"])){
    $nom = $_POST["nom"];
    echo "nom : ".$nom;;
    
    $prenom = $_POST["prenom"];
    echo "prenom : ".$prenom;
    
    $mail = $_POST["mail"];
    echo "mail : ".$mail;
    
    $password = $_POST["password"];
    echo "password :".$password;

    $pdo -> query("INSERT INTO identification(nom, prenom, mail, password) VALUES ('$nom', '$prenom', '$mail', '$password')");/*$mysqli*/
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscrivez-vous</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src=""></script>
</head>
<body>
<form method="POST" action="index.php">
    <div class=container-fluide>
        <div class="row">
            <input type="text" class="form-control col-lg-1" name="nom" placeholder="nom">
            </br>
            <input type="text" class="form-control col-lg-1 offset-lg-2" name="prenom" placeholder="prenom">
            </br>
            <input type="text" class="form-control col-lg-1 offset-lg-2" name="mail" placeholder="mail">
            </br>
            <input type="text" class="form-control col-lg-1 offset-lg-2" name="password" placeholder="password">
        </div>
        </br>
        <input type="submit" class="btn btn-primary col-lg-12">
    </div>
</form>

</body>
</html>