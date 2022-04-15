<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="60"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/app.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/grid.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/admin.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/usermng.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/errorReport.css">
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/errorReport.css"> -->
    
    <title>Login</title>
    <style>
        /* @media (min-width: 1024px) and (max-width: 1239px) {
            .login__header {
                display: flex;
            }
        } */

        @media (max-width:739px) {
            .login__header__nav {
                display: none;
            }
            .login__header__brand {
                width: 100%;
                text-align: center;
            }
        }
        
    </style>
</head>
<body>
    <div class="background">
    </div>
    <div class="grid wide container">
        <div class="row">
            <!-- <i class="fa-solid fa-bars" style="font-size: 30px; margin: auto 0;"></i>
            <input type="checkbox" name="navmobile" id="navmobile">
            <label for="navmobile">Ken</label> -->
            <div class="col l-3 m-3 c-12 login__header" style="margin-top: 5px">
               <a href="<?php echo BASE_URL ?>/<?php if (isset($_SESSION['user']) && $_SESSION['user']=="admin") echo "admin"?>" style="text-decoration:none"><h1 class="login__header__brand">SmartKitchen</h1></a> 
            </div>
            <div class="col l-9 m-9 c-0" style="margin-top: 5px">
                <ul class="login__header__nav" style="float: right">
                    <!-- <li class="login__header__nav__list"><a href="<?php echo BASE_URL ?>/<?php if (isset($_SESSION['user']) && $_SESSION['user']=="admin") echo "admin"?>" style="text-decoration:none">Home</a></li> -->
                    <?php if (isset($_SESSION['user'])) {?>
                        <?php if($_SESSION['user']!="admin") {?><li class="login__header__nav__list" ><a href="<?php echo BASE_URL?>/user/" style="text-decoration:none"><?php echo $_SESSION['user'] ?></a></li><?php }?>
                        <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/logout" style="text-decoration:none"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                    <?php } else {?>
                        <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/login" style="text-decoration:none">Log In</a></li>
                        <li class="login__header__nav__list"><a href="<?php echo BASE_URL?>/register" style="text-decoration:none">Register</a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>