<?php

session_start();

$identifiant = $_POST['identifiant'];
$mdp = $_POST['mdp'];

// connection à la base
$mysqli = new mysqli("127.0.0.1","root","","db_diffa");

if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : " . $mysqli->connect_error;
}
else
{
    echo "connection a réussi";
}
// la regquête

$query = "SELECT * FROM utilisateurs WHERE identifiant = '$identifiant'";

// Execution de la requête

$res = $mysqli->query($query);

if ($res) {

    $row = $res->fetch_assoc();
    $hash = $row['mdp'];
    $identifiant = $row['identifiant'];
   
    echo "query ok";

    if(password_verify($mdp, $hash)){
        echo "Vous êtes à présent connecté !";
        header('Location: http://localhost/07_DIFFA_Site/admin/panel_admin.php');
        $_SESSION['identifiant'] = $identifiant;
    }
    else{
        echo "<br> L'identifiant ou le mot de passe est erroné, veuillez recommencer !";
    }
}

else{
    echo "query ko" .$mysqli->error;
}
?>