<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php INCLUDE_PATH; ?>https://kit.fontawesome.com/2cef6ec148.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="<?php INCLUDE_PATH; ?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?php INCLUDE_PATH; ?>https://fonts.gstatic.com" crossorigin>
    <link href="<?php INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="<?php INCLUDE_PATH; ?>https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php INCLUDE_PATH; ?>styles.css">
    <title>Project_01</title>
</head>
<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'about':
                echo '<target target="about"/>';
                break;
            case 'services';
                echo '<target target="services" />';
                break;
            case 'products';
                echo '<target target="products"/>';
                break;
        }
    ?>

    <header>
            <div class="container">

                <div class="navbar">
                    <div class="logo"><a href="<?php INCLUDE_PATH; ?>home">Gipsy&Co.</a></div>
            
                    <div class="hamburger active"><i class="fas fa-stream"></i></div>
                    <ul class="menu active">
                        <li><a href="<?php INCLUDE_PATH; ?>about">About Us</a></li>
                        <li><a href="<?php INCLUDE_PATH; ?>products">Products</a></li>
                        <li><a href="<?php INCLUDE_PATH; ?>services">Services</a></li>
                        <li><a href="<?php INCLUDE_PATH; ?>contact">Contact</a></li>
                    </ul>
                </div>
                
            </div><!--container-->
        
    </header>

    <?php

        

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else {
            if($url != 'about' && $url != 'products' && $url != 'services'){
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }   
        }

    ?>

    <footer>
        <p>Gipsy&Co. - all rights reserved</p>
    </footer>

    <script src="<?php INCLUDE_PATH; ?>js/script.js"></script>
    <?php 
    if($url == 'contact'){
        ?>
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzg26wM4gjvAsgsAa4gXhZnuHxg8VgBds&"></script>
    <script src="<?php INCLUDE_PATH; ?>js/map.js"></script>

    <?php
        }
    ?>
</body>
</html>