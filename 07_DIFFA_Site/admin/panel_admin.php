<?php
require_once "../connection.php";
/*
if (empty($_SESSION['identifiant'])){
    header('Location: admin.html');
    exit();
}*/

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Le DIFFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../style.css">
    <meta name="author" content="Dimitri COURTIN">
    <link rel="icon" type="image/x-icon" href="../images/Diffa.png" />
</head>

<body>
    <main class="adminPanel">
        <div id="section1" class="container-fluid">
            <div class="langues"><a href="#"><span class="flag-icon flag-icon-fr"></span></a>
                | <a href="#"><span class="flag-icon flag-icon-gb"></span></a></div>
            <img src="../images/Diffa.png">
        </div>

        <div id="adminRestaurant" class="container">
            <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                        <h1>Section Présentation Restaurant</h1>
                        <tr>
                            <th>Texte Présentation</th>
                            <th>Terrasse 1</th>
                            <th>Terrasse 2</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$select_restaurant=$db->prepare("SELECT * FROM restaurant");
							$select_restaurant->execute();
							while($row=$select_restaurant->fetch(PDO::FETCH_ASSOC))
							{
							?>
                        <tr>
                            <td width="30%"><?php echo $row['textPresentation']; ?></td>
                            <td width="35%"><img src="../images/<?php echo $row['restaurantTerrasse1']; ?>" width="100%" height=""></td>
                            <td width="25%"><img src="../images/<?php echo $row['restaurantTerrasse2']; ?>" width="100%" height=""></td>
                            <td width="10%"><a href="editRestaurant.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Modifier</a></td>
                        </tr>
                        <?php
						}
						?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="adminCarte" class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <h1>Section Carte</h1>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Text</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$select_apropos=$db->prepare("SELECT * FROM carte");
							$select_apropos->execute();
							while($row=$select_apropos->fetch(PDO::FETCH_ASSOC))
							{
							?>

                        <tr><td></td>
                        <td></td>
                            <td><?php echo $row['cartePresentation']; ?></td>
                            <td width="10%"><a href="editCarte.php?update_id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning">Modifier</a></td>
                        </tr>
                        <tr>
                        <td width="30%"><img src="../images/<?php echo $row['sliderImage1']; ?>" width="100%" height=""></td>
                            <td width="20%"><?php echo $row['sliderTitre1']; ?></td>
                            <td width="40%"><?php echo $row['sliderText1']; ?></td>
                            <td width="10%"><a href="editCarte.php?update_id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning">Modifier</a></td>
                        </tr>

                        <tr>
                        <td width="30%"><img src="../images/<?php echo $row['sliderImage2']; ?>" width="100%" height="">
                            </td>
                            <td width="20%"><?php echo $row['sliderTitre2']; ?></td>
                            <td width="40%"><?php echo $row['sliderText2']; ?></td>
                            <td width="10%"><a href="editCarte.php?update_id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning">Modifier</a></td>
                        </tr>

                        <tr>
                        <td width="30%"><img src="../images/<?php echo $row['sliderImage3']; ?>" width="100%" height="">
                            </td>
                            <td><?php echo $row['sliderTitre3']; ?></td>
                            <td><?php echo $row['sliderText3']; ?></td>
                            <td><a href="editCarte.php?update_id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning">Modifier</a></td>
                        </tr>
                        <?php
									}
									?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="adminApropos" class="container">
            <div class="table-responsive-sm">
                <table class="table">
                    <thead class="thead-dark">
                        <h1>Section A propos</h1>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Texte</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$select_apropos=$db->prepare("SELECT * FROM apropos");
							$select_apropos->execute();
							while($row=$select_apropos->fetch(PDO::FETCH_ASSOC))
							{
							?>
                        <tr>
                        <td width="30%"><img src="../images/<?php echo $row['image1']; ?>" width="100%" height="">
                            </td>
                            <td width="20%"><?php echo $row['titre1']; ?></td>
                            <td width="40%"><?php echo $row['text1']; ?></td>
                            <td width="10%"><a href="editApropos.php?update_id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning">Modifier</a></td>
                        </tr>

                        <tr>
                            <td><img src="../images/<?php echo $row['image2']; ?>" width="100%" height="">
                            </td>
                            <td width="20%"><?php echo $row['titre2']; ?></td>
                            <td width="40%"><?php echo $row['text2']; ?></td>
                            <td><a href="editApropos.php?update_id=<?php echo $row['id']; ?>"
                                    class="btn btn-warning">Modifier</a></td>
                        </tr>
                        <tr><td></td>
                            <td><?php echo $row['titre3']; ?></td>
                            <td><?php echo $row['text3']; ?></td>
                            <td><a href="editApropos.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Modifier</a></td>
                        </tr>
                        <?php
									}
									?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>
</body>

</html>