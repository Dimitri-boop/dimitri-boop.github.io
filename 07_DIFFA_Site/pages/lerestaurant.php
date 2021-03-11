<?php
require_once "../connection.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Le DIFFA Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../style.css">
    <meta name="author" content="Dimitri COURTIN">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="../images/Diffa.png" />
    <meta name="google-site-verification" content="" />
</head>

<body>
    <div class="wrapper" id="main-wrapper">
        <header id="Header" class="main-header">
            <div class="container">
                <div class="logo-and-menu-container">
                    <div class="logo-section">
                        <a href="javascript:void(0)" class="header-logo">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.791 0C8.86075 0 0 8.86075 0 19.791C0 30.7213 8.86075 39.5821 19.791 39.5821C30.7213 39.5821 39.5821 30.7213 39.5821 19.791C39.5821 8.86075 30.7213 0 19.791 0ZM13.8436 9.89552C13.9022 9.94197 13.9486 9.94197 13.9951 9.93591C14.2354 9.91572 14.4414 9.97428 14.5747 10.1944C14.5982 10.2326 14.6218 10.2707 14.6453 10.3089C14.9209 10.7555 15.1969 11.2029 15.4593 11.6606C15.6492 11.9915 15.8304 12.3278 16.0117 12.6644C16.1447 12.9112 16.2778 13.1582 16.4145 13.4034C16.4674 13.5028 16.5335 13.5964 16.5997 13.6901C16.637 13.743 16.6744 13.7958 16.7093 13.8498C16.7937 13.9839 16.8743 14.1217 16.9531 14.2562L16.9658 14.2779C17.1355 14.599 17.1274 14.9221 16.8749 15.1786C16.6092 15.4503 16.3236 15.7077 16.0385 15.9646C15.938 16.0552 15.8375 16.1457 15.738 16.2368C15.6142 16.3504 15.4886 16.4621 15.3631 16.5738C15.165 16.7501 14.967 16.9263 14.7767 17.1093C14.5343 17.3435 14.4717 17.6364 14.6353 17.9454C14.6504 17.9737 14.6656 18.0021 14.6807 18.0304C14.9179 18.4746 15.1548 18.9183 15.4148 19.353C16.4407 21.0635 17.7514 22.5176 19.4074 23.6384C20.0456 24.0726 20.71 24.4705 21.3805 24.8501C22.0126 25.2076 22.259 25.147 22.7498 24.5997C23.009 24.3118 23.2629 24.0214 23.5173 23.7305C23.7108 23.5092 23.9045 23.2877 24.1008 23.0669C24.2099 22.9437 24.3411 22.8346 24.4684 22.7296C24.7269 22.5115 25.0096 22.4873 25.3065 22.6367C25.3251 22.6458 25.344 22.6547 25.363 22.6636C25.4284 22.6943 25.4945 22.7253 25.5508 22.766C26.0775 23.1427 26.6456 23.4454 27.213 23.7477C27.4943 23.8976 27.7753 24.0473 28.051 24.2059C28.3353 24.3692 28.6146 24.54 28.8932 24.7102C29.052 24.8073 29.2106 24.9042 29.3698 24.9996C29.6061 25.1389 29.701 25.3429 29.6848 25.6236C29.6404 26.4132 29.5091 27.1887 29.0507 27.8552C28.8588 28.1319 28.5862 28.3742 28.3115 28.5701C27.5502 29.1033 26.7 29.4324 25.7952 29.6344C24.9733 29.8182 24.1533 29.7515 23.3657 29.5051C21.845 29.0366 20.3465 28.4994 18.9672 27.6855C17.7151 26.9444 16.5761 26.0497 15.5219 25.0501C14.187 23.7798 12.9954 22.3944 12.0321 20.8171C11.404 19.7932 10.9557 18.6906 10.5498 17.5657C10.3034 16.8871 10.0611 16.2146 9.952 15.4957C9.82679 14.6818 9.91363 13.8982 10.1742 13.1268C10.4084 12.43 10.7012 11.7636 11.1435 11.1678C11.4909 10.7054 11.9251 10.3661 12.4865 10.2146C12.8037 10.1307 13.1229 10.0588 13.4421 9.9869C13.576 9.95673 13.7099 9.92657 13.8436 9.89552Z"
                                    fill="#F4A00F" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="header-logo">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.791 0C8.86075 0 0 8.86075 0 19.791C0 30.7213 8.86075 39.5821 19.791 39.5821C30.7213 39.5821 39.5821 30.7213 39.5821 19.791C39.5821 8.86075 30.7213 0 19.791 0ZM21.8539 20.6604V31.4277H17.3988V20.6608H15.1731V16.9503H17.3988V14.7225C17.3988 11.6955 18.6556 9.89552 22.2263 9.89552H25.199V13.6064H23.3408C21.9509 13.6064 21.8589 14.125 21.8589 15.0927L21.8539 16.9499H25.22L24.8261 20.6604H21.8539Z"
                                    fill="#F4A00F" />
                            </svg>
                        </a>

                        <a href="javascript:void(0)" class="header-logo">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.791 0C8.86075 0 0 8.86075 0 19.791C0 30.7213 8.86075 39.5821 19.791 39.5821C30.7213 39.5821 39.5821 30.7213 39.5821 19.791C39.5821 8.86075 30.7213 0 19.791 0ZM15.4396 9.29959C16.5655 9.24835 16.9253 9.23582 19.7919 9.23582H19.7886C22.6562 9.23582 23.0146 9.24835 24.1405 9.29959C25.2642 9.35105 26.0317 9.52895 26.7046 9.78997C27.3995 10.0594 27.9866 10.42 28.5738 11.0071C29.1609 11.5938 29.5215 12.1827 29.792 12.877C30.0515 13.5481 30.2296 14.3151 30.2824 15.4388C30.333 16.5647 30.3462 16.9245 30.3462 19.7912C30.3462 22.6578 30.333 23.0167 30.2824 24.1426C30.2296 25.2659 30.0515 26.0331 29.792 26.7045C29.5215 27.3985 29.1609 27.9874 28.5738 28.5741C27.9873 29.1612 27.3993 29.5227 26.7052 29.7923C26.0337 30.0534 25.2658 30.2313 24.1421 30.2827C23.0162 30.334 22.6575 30.3465 19.7906 30.3465C16.9242 30.3465 16.5646 30.334 15.4387 30.2827C14.3153 30.2313 13.548 30.0534 12.8764 29.7923C12.1826 29.5227 11.5937 29.1612 11.0073 28.5741C10.4203 27.9874 10.0597 27.3985 9.78988 26.7042C9.52907 26.0331 9.35117 25.2661 9.29949 24.1424C9.24848 23.0165 9.23572 22.6578 9.23572 19.7912C9.23572 16.9245 9.24892 16.5645 9.29927 15.4386C9.34985 14.3154 9.52797 13.5481 9.78966 12.8767C10.0601 12.1827 10.4208 11.5938 11.0079 11.0071C11.5946 10.4202 12.1835 10.0596 12.8778 9.78997C13.5489 9.52895 14.3159 9.35105 15.4396 9.29959Z"
                                    fill="#F4A00F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.8452 11.1379C19.0291 11.1376 19.2268 11.1377 19.4403 11.1378L19.7921 11.1379C22.6104 11.1379 22.9444 11.148 24.0573 11.1986C25.0865 11.2456 25.645 11.4176 26.0171 11.5621C26.5097 11.7534 26.8609 11.9821 27.2301 12.3515C27.5995 12.721 27.8282 13.0728 28.02 13.5654C28.1644 13.937 28.3366 14.4956 28.3835 15.5247C28.434 16.6374 28.445 16.9717 28.445 19.7886C28.445 22.6056 28.434 22.9399 28.3835 24.0526C28.3364 25.0817 28.1644 25.6403 28.02 26.0119C27.8287 26.5045 27.5995 26.8552 27.2301 27.2244C26.8606 27.5939 26.5099 27.8226 26.0171 28.0139C25.6455 28.159 25.0865 28.3306 24.0573 28.3776C22.9446 28.4282 22.6104 28.4392 19.7921 28.4392C16.9736 28.4392 16.6396 28.4282 15.5269 28.3776C14.4977 28.3301 13.9392 28.1581 13.5669 28.0137C13.0743 27.8224 12.7224 27.5937 12.353 27.2242C11.9836 26.8548 11.7549 26.5038 11.5631 26.011C11.4186 25.6394 11.2464 25.0808 11.1996 24.0517C11.149 22.939 11.1389 22.6047 11.1389 19.786C11.1389 16.9673 11.149 16.6348 11.1996 15.5221C11.2467 14.4929 11.4186 13.9344 11.5631 13.5623C11.7544 13.0697 11.9836 12.7179 12.353 12.3485C12.7224 11.979 13.0743 11.7503 13.5669 11.5586C13.9389 11.4134 14.4977 11.2419 15.5269 11.1946C16.5006 11.1506 16.8779 11.1375 18.8452 11.1353V11.1379ZM25.4264 12.8905C24.7271 12.8905 24.1597 13.4572 24.1597 14.1567C24.1597 14.856 24.7271 15.4234 25.4264 15.4234C26.1257 15.4234 26.693 14.856 26.693 14.1567C26.693 13.4574 26.1257 12.8901 25.4264 12.8901V12.8905ZM14.3713 19.7911C14.3713 16.7976 16.7983 14.3706 19.7917 14.3705C22.7852 14.3705 25.2116 16.7975 25.2116 19.7911C25.2116 22.7846 22.7855 25.2106 19.7919 25.2106C16.7984 25.2106 14.3713 22.7846 14.3713 19.7911Z"
                                    fill="#F4A00F" />
                                <path
                                    d="M19.7919 16.2729C21.7349 16.2729 23.3103 17.8481 23.3103 19.7914C23.3103 21.7345 21.7349 23.3098 19.7919 23.3098C17.8486 23.3098 16.2734 21.7345 16.2734 19.7914C16.2734 17.8481 17.8486 16.2729 19.7919 16.2729Z"
                                    fill="#F4A00F" />
                            </svg></a>
                    </div>
                    <div class="menu-section">
                        <div class="full-bg-menu-items menu-items-blocks">
                            <a class="menu-bar" href="javascript:void(0)">
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                                <span>&nbsp;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <ul>
                        <li class="menu-item"><a href="#lerestaurant"><span>Le Restaurant</span></a></li>
                        <li class="menu-item"><a href="#laCarte"><span>La Carte</span></a></li>
                        <li class="menu-item"><a href="#aPropos"><span>A Propos</span></a></li>
                        <li class="menu-item"><a href="#informations"><span>Informations</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <main>
    <div class="container-fluid">
            <div class="row d-flex justify-content-center">     
                <nav id="menuTablette" class="col-md-12">
                    <ul>
                        <li><a href="#lerestaurant">Le restaurant</a></li>
                        <li><a href="#laCarte">La carte</a></li>
                        <li><img src="../images/Diffa.png" class="img-grey"></li>
                        <li><a href="#aPropos">A propos</a></li>
                        <li><a href="#informations">Informations</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="section1" class="container-fluid">
        <div>
            <a class="lacartebouton">La carte</a>
        </div>
            <div class="langues"><a href="#"><span class="flag-icon flag-icon-fr"></span></a>
                | <a href="#"><span class="flag-icon flag-icon-gb"></span></a></div>
        </div>
       
        <section id="lerestaurant" class="container-fluid">
            <div class="row d-flex justify-content-between">
                <?php 
            //Execution de la requête
            $select_restaurant = $db->prepare("SELECT * FROM restaurant");
            $select_restaurant->execute();
            while ($row = $select_restaurant->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='col-12'><h1>Le restaurant</h1></div>"
                ."<div class='col-12 col-md-8 col-xl-8  '><img src='../images/".$row['restaurantTerrasse1']."' class='img-grey' alt='Terrasse Exterieur 1'><p>".$row['textPresentation']."</p></div>"
                ."<div id='lerestaurantImgDesactivee' class='col-md-4'>"."<img src='../images/".$row['restaurantTerrasse2']."'alt='Terrasse Exterieur'></div>";
                }
             ?>
            </div>
        </section>
        <section id="illustrationsContainer" class="container-fluid">
            <div id="illustrations">
                <div class="row">
                    <div class="col-md-4">
                    <img src="../images/Plat_Diffa_02.jpg" class="featurette-image img-fluid mx-auto" width="500"
                            height="500">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                            ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            Praesent commodo cursus magna.</p>
                    </div>
                    <div class="col-md-4">
                    <img src="../images/Plat_Diffa_02.jpg" class="featurette-image img-fluid mx-auto" width="500"
                            height="500">

                        <h2>Heading</h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/Plat_Diffa_02.jpg" class="featurette-image img-fluid mx-auto" width="500"
                            height="500">

                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
                            ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                            condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="laCarte" class="container">
            <h1>La Carte</h1>
            <?php 
                $select_carte = $db->prepare("SELECT * FROM carte");
                $select_carte->execute();
                    while ($row = $select_carte->fetch(PDO::FETCH_ASSOC)) {
                    echo
                    "<p>".$row['cartePresentation']."</p>";
                    }
                ?>
                
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <?php 
                $select_carte = $db->prepare("SELECT * FROM carte");
                $select_carte->execute();
                    while ($row = $select_carte->fetch(PDO::FETCH_ASSOC)) {
                    echo
                    /*"<div class='carousel-item active'><img src='../images/".$row['sliderImage']."'alt='Slider Image' class='d-block w-100'><div class='carousel-caption d-none d-md-block'><h5>".$row['sliderTitre']."</h5><p>".$row['sliderText']."</div></div>".*/

                    "<div class='carousel-item active'><img src='../images/".$row['sliderImage1']."'alt='Slider Image' class='d-block w-100'><div class='carousel-caption d-none d-md-block'><h5>".$row['sliderTitre1']."</h5><p>".$row['sliderText1']."</div></div>".
                    "<div class='carousel-item'><img src='../images/".$row['sliderImage2']."'alt='Slider Image' class='d-block w-100'><div class='carousel-caption d-none d-md-block'><h5>".$row['sliderTitre2']."</h5><p>".$row['sliderText2']."</div></div>".
                    "<div class='carousel-item'><img src='../images/".$row['sliderImage3']."'alt='Slider Image' class='d-block w-100'><div class='carousel-caption d-none d-md-block'><h5>".$row['sliderTitre3']."</h5><p>".$row['sliderText3']."</div></div>";
                    }
                ?><!--
                    <div class="carousel-item active">
                        <img src="../images/Exterieur_Diffa_01.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/Exterieur_Diffa_02.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/Exterieur_Diffa_03.PNG" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>-->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        <section id="aPropos" class="container-fluid">
            <h1>A propos</h1>
            <?php 
                $select_illustrations = $db->prepare("SELECT * FROM apropos");
                $select_illustrations->execute();
                    while ($row = $select_illustrations->fetch(PDO::FETCH_ASSOC)) {
                    echo
                    "<div class='row aPropos'><div class='col-md-7'><h2 class='aPropos-heading'>".$row['titre1']."</h2><p class='lead'>".$row['text1']."</p></div>".
                    "<div class='col-md-5'><img src='../images/".$row['image1']."'alt='image1' class='featurette-image img-fluid mx-auto' width='500' height='500'></div></div><hr class='featurette-divider'>".
                    "<div class='row aPropos'><div class='col-md-7 order-md-2'><h2 class='aPropos-heading'>".$row['titre2']."</h2><p class='lead'>".$row['text2']."</p></div>".
                    "<div class='col-md-5 order-md-1'><img src='../images/".$row['image2']."'alt='image2' class='featurette-image img-fluid mx-auto' width='500' height='500'></div></div><hr class='featurette-divider'>".
                    "<div class='row aPropos'><div class='col-md-7'><h2 class='aPropos-heading'>".$row['titre3']."</h2><p class='lead'>".$row['text3']."</p></div>".
                    "<div class='col-md-5'><iframe src='https://open.spotify.com/embed/album/7u98OANaYS4d4SxZiPNIKW'alt='text1' width='100%' height='100%' frameborder='0' allowtransparency='true' allow='encrypted-media'></iframe></div></div><hr class='featurette-divider'>";                        }
                ?>
        </section>

        <section id="informations" class="container">
            <h1>Informations</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">  
                    <h3>Nos horaires</h3>
                    <p>Du mardi au samedi de <br>00 h 00 à 00 h 00 <br>Le dimanche et le lundi : fermé</p>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <h3>Nous contacter &amp; réserver</h3>
                    <div class="reseaux">
                        <a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.791 0C8.86075 0 0 8.86075 0 19.791C0 30.7213 8.86075 39.5821 19.791 39.5821C30.7213 39.5821 39.5821 30.7213 39.5821 19.791C39.5821 8.86075 30.7213 0 19.791 0ZM13.8436 9.89552C13.9022 9.94197 13.9486 9.94197 13.9951 9.93591C14.2354 9.91572 14.4414 9.97428 14.5747 10.1944C14.5982 10.2326 14.6218 10.2707 14.6453 10.3089C14.9209 10.7555 15.1969 11.2029 15.4593 11.6606C15.6492 11.9915 15.8304 12.3278 16.0117 12.6644C16.1447 12.9112 16.2778 13.1582 16.4145 13.4034C16.4674 13.5028 16.5335 13.5964 16.5997 13.6901C16.637 13.743 16.6744 13.7958 16.7093 13.8498C16.7937 13.9839 16.8743 14.1217 16.9531 14.2562L16.9658 14.2779C17.1355 14.599 17.1274 14.9221 16.8749 15.1786C16.6092 15.4503 16.3236 15.7077 16.0385 15.9646C15.938 16.0552 15.8375 16.1457 15.738 16.2368C15.6142 16.3504 15.4886 16.4621 15.3631 16.5738C15.165 16.7501 14.967 16.9263 14.7767 17.1093C14.5343 17.3435 14.4717 17.6364 14.6353 17.9454C14.6504 17.9737 14.6656 18.0021 14.6807 18.0304C14.9179 18.4746 15.1548 18.9183 15.4148 19.353C16.4407 21.0635 17.7514 22.5176 19.4074 23.6384C20.0456 24.0726 20.71 24.4705 21.3805 24.8501C22.0126 25.2076 22.259 25.147 22.7498 24.5997C23.009 24.3118 23.2629 24.0214 23.5173 23.7305C23.7108 23.5092 23.9045 23.2877 24.1008 23.0669C24.2099 22.9437 24.3411 22.8346 24.4684 22.7296C24.7269 22.5115 25.0096 22.4873 25.3065 22.6367C25.3251 22.6458 25.344 22.6547 25.363 22.6636C25.4284 22.6943 25.4945 22.7253 25.5508 22.766C26.0775 23.1427 26.6456 23.4454 27.213 23.7477C27.4943 23.8976 27.7753 24.0473 28.051 24.2059C28.3353 24.3692 28.6146 24.54 28.8932 24.7102C29.052 24.8073 29.2106 24.9042 29.3698 24.9996C29.6061 25.1389 29.701 25.3429 29.6848 25.6236C29.6404 26.4132 29.5091 27.1887 29.0507 27.8552C28.8588 28.1319 28.5862 28.3742 28.3115 28.5701C27.5502 29.1033 26.7 29.4324 25.7952 29.6344C24.9733 29.8182 24.1533 29.7515 23.3657 29.5051C21.845 29.0366 20.3465 28.4994 18.9672 27.6855C17.7151 26.9444 16.5761 26.0497 15.5219 25.0501C14.187 23.7798 12.9954 22.3944 12.0321 20.8171C11.404 19.7932 10.9557 18.6906 10.5498 17.5657C10.3034 16.8871 10.0611 16.2146 9.952 15.4957C9.82679 14.6818 9.91363 13.8982 10.1742 13.1268C10.4084 12.43 10.7012 11.7636 11.1435 11.1678C11.4909 10.7054 11.9251 10.3661 12.4865 10.2146C12.8037 10.1307 13.1229 10.0588 13.4421 9.9869C13.576 9.95673 13.7099 9.92657 13.8436 9.89552Z"
                                    fill="#F4A00F" />
                            </svg></a>
                        <p>Tel : 06 00 00 00 00</p>
                    </div>
                    <div class="reseaux">
                        <a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.791 0C8.86075 0 0 8.86075 0 19.791C0 30.7213 8.86075 39.5821 19.791 39.5821C30.7213 39.5821 39.5821 30.7213 39.5821 19.791C39.5821 8.86075 30.7213 0 19.791 0ZM15.4396 9.29959C16.5655 9.24835 16.9253 9.23582 19.7919 9.23582H19.7886C22.6562 9.23582 23.0146 9.24835 24.1405 9.29959C25.2642 9.35105 26.0317 9.52895 26.7046 9.78997C27.3995 10.0594 27.9866 10.42 28.5738 11.0071C29.1609 11.5938 29.5215 12.1827 29.792 12.877C30.0515 13.5481 30.2296 14.3151 30.2824 15.4388C30.333 16.5647 30.3462 16.9245 30.3462 19.7912C30.3462 22.6578 30.333 23.0167 30.2824 24.1426C30.2296 25.2659 30.0515 26.0331 29.792 26.7045C29.5215 27.3985 29.1609 27.9874 28.5738 28.5741C27.9873 29.1612 27.3993 29.5227 26.7052 29.7923C26.0337 30.0534 25.2658 30.2313 24.1421 30.2827C23.0162 30.334 22.6575 30.3465 19.7906 30.3465C16.9242 30.3465 16.5646 30.334 15.4387 30.2827C14.3153 30.2313 13.548 30.0534 12.8764 29.7923C12.1826 29.5227 11.5937 29.1612 11.0073 28.5741C10.4203 27.9874 10.0597 27.3985 9.78988 26.7042C9.52907 26.0331 9.35117 25.2661 9.29949 24.1424C9.24848 23.0165 9.23572 22.6578 9.23572 19.7912C9.23572 16.9245 9.24892 16.5645 9.29927 15.4386C9.34985 14.3154 9.52797 13.5481 9.78966 12.8767C10.0601 12.1827 10.4208 11.5938 11.0079 11.0071C11.5946 10.4202 12.1835 10.0596 12.8778 9.78997C13.5489 9.52895 14.3159 9.35105 15.4396 9.29959Z"
                                    fill="#F4A00F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.8452 11.1379C19.0291 11.1376 19.2268 11.1377 19.4403 11.1378L19.7921 11.1379C22.6104 11.1379 22.9444 11.148 24.0573 11.1986C25.0865 11.2456 25.645 11.4176 26.0171 11.5621C26.5097 11.7534 26.8609 11.9821 27.2301 12.3515C27.5995 12.721 27.8282 13.0728 28.02 13.5654C28.1644 13.937 28.3366 14.4956 28.3835 15.5247C28.434 16.6374 28.445 16.9717 28.445 19.7886C28.445 22.6056 28.434 22.9399 28.3835 24.0526C28.3364 25.0817 28.1644 25.6403 28.02 26.0119C27.8287 26.5045 27.5995 26.8552 27.2301 27.2244C26.8606 27.5939 26.5099 27.8226 26.0171 28.0139C25.6455 28.159 25.0865 28.3306 24.0573 28.3776C22.9446 28.4282 22.6104 28.4392 19.7921 28.4392C16.9736 28.4392 16.6396 28.4282 15.5269 28.3776C14.4977 28.3301 13.9392 28.1581 13.5669 28.0137C13.0743 27.8224 12.7224 27.5937 12.353 27.2242C11.9836 26.8548 11.7549 26.5038 11.5631 26.011C11.4186 25.6394 11.2464 25.0808 11.1996 24.0517C11.149 22.939 11.1389 22.6047 11.1389 19.786C11.1389 16.9673 11.149 16.6348 11.1996 15.5221C11.2467 14.4929 11.4186 13.9344 11.5631 13.5623C11.7544 13.0697 11.9836 12.7179 12.353 12.3485C12.7224 11.979 13.0743 11.7503 13.5669 11.5586C13.9389 11.4134 14.4977 11.2419 15.5269 11.1946C16.5006 11.1506 16.8779 11.1375 18.8452 11.1353V11.1379ZM25.4264 12.8905C24.7271 12.8905 24.1597 13.4572 24.1597 14.1567C24.1597 14.856 24.7271 15.4234 25.4264 15.4234C26.1257 15.4234 26.693 14.856 26.693 14.1567C26.693 13.4574 26.1257 12.8901 25.4264 12.8901V12.8905ZM14.3713 19.7911C14.3713 16.7976 16.7983 14.3706 19.7917 14.3705C22.7852 14.3705 25.2116 16.7975 25.2116 19.7911C25.2116 22.7846 22.7855 25.2106 19.7919 25.2106C16.7984 25.2106 14.3713 22.7846 14.3713 19.7911Z"
                                    fill="#F4A00F" />
                                <path
                                    d="M19.7919 16.2729C21.7349 16.2729 23.3103 17.8481 23.3103 19.7914C23.3103 21.7345 21.7349 23.3098 19.7919 23.3098C17.8486 23.3098 16.2734 21.7345 16.2734 19.7914C16.2734 17.8481 17.8486 16.2729 19.7919 16.2729Z"
                                    fill="#F4A00F" />
                            </svg></a>
                        <p>Instagram : @diffa_restaurant</p>
                    </div>
                    <div class="reseaux">
                        <a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.791 0C8.86075 0 0 8.86075 0 19.791C0 30.7213 8.86075 39.5821 19.791 39.5821C30.7213 39.5821 39.5821 30.7213 39.5821 19.791C39.5821 8.86075 30.7213 0 19.791 0ZM21.8539 20.6604V31.4277H17.3988V20.6608H15.1731V16.9503H17.3988V14.7225C17.3988 11.6955 18.6556 9.89552 22.2263 9.89552H25.199V13.6064H23.3408C21.9509 13.6064 21.8589 14.125 21.8589 15.0927L21.8539 16.9499H25.22L24.8261 20.6604H21.8539Z"
                                    fill="#F4A00F" />
                            </svg></a>
                        <p>Facebook : @diffa_restaurant</p>
                    </div>
                </div>
            </div>
            <div id="carteMaps" class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2690.9782260859424!2d1.335121215629833!3d47.58766557918343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4a81aa472e579%3A0x848a5cb11f0d4f0e!2s46%20Rue%20de%20la%20Foulerie%2C%2041000%20Blois!5e0!3m2!1sfr!2sfr!4v1610757005922!5m2!1sfr!2sfr"
                    width="1200" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </section>
    </main>
    <footer class="container-fluid">
        <div class="row">
            <div class="mentions col-12">
                <p><a href="./mentions.html" target="_blank"><i class="fa fa-copyright" aria-hidden="true"> </i>
                        Mentions Légales</a> 2020</p>
            </div>
        </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="../script.js"></script>
</body>

</html>