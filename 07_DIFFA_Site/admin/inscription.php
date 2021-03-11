<?php
$mdp = $_POST['mdp'];
$newMdp = password_hash($mdp, PASSWORD_DEFAULT);
$identifiant= $_POST['identifiant'];

// connection à la base
$mysqli = new mysqli("127.0.0.1","root","","db_diffa");

if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : " . $mysqli->connect_error;
}
else
{
    echo "connection a réussi";
}

$query = "INSERT INTO utilisateurs (mdp, identifiant) VALUES ('$newMdp', '$identifiant')";


$res = $mysqli->query($query);

if ($res) {
    echo "query ok";
    echo $mysqli->affected_rows;
    header('Location: http://localhost/07_DIFFA_Site/admin/panel_admin.php');
}
else{
    echo "query ko" .$mysqli->error;
}
echo $query;

?>  