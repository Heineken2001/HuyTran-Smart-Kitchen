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
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/noti.css">
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/errorReport.css"> -->
    
    <title>SmartKitchen by CoderCodon</title>
    <style>
        /* @media (min-width: 1024px) and (max-width: 1239px) {
            .login__header {
                display: flex;
            }
        } */

        @media (max-width:739px) {
            .login__header__nav {
                float:left;
            }
            .login__header__brand {
                width: 10%;
                text-align: center;
            }
        }

    </style>
</head>
<body>
    <div class="background">
    </div>
    <div class="grid wide container">
        <div class="row" style="display:flex; align-items:center; justify-content:space-between;">
            <!-- <i class="fa-solid fa-bars" style="font-size: 30px; margin: auto 0;"></i>
            <input type="checkbox" name="navmobile" id="navmobile">
            <label for="navmobile">Ken</label> -->
            <div class="login__header" >
               <a href="<?php echo BASE_URL ?>/<?php if (isset($_SESSION['user']) && $_SESSION['user']=="admin") echo "admin"?>" style="text-decoration:none"><img src="<?php echo BASE_URL?>/public/images/logokitchen.png" alt="" class="logokitchen"></a> 
            </div>
           
            <?php if (isset($_SESSION['user']) && $_SESSION['user']=="admin") {?>
            <div class="col l-5 m-5 c-0" style="margin-top: -15px;z-index: 1">
                    <!-- <h1 style="float: right;">HI</h1> -->
                <div class = "icons">
                    <div class = "notification">
                        <a href = "#">
                            <div class = "notBtn" href = "#">
                            <!--Number supports double digets and automaticly hides itself when there is nothing between divs -->
                                <div class = "number"><?php echo count($reports)?></div>
                                <i class="fas fa-bell"></i>
                                <div class = "box">
                                    <div class = "display">
                                        <div class = "nothing"> 
                                            <i class="fas fa-child stick"></i> 
                                            <div class = "cent">Looks Like your all caught up!</div>
                                        </div>
                                        <div class = "cont"><!-- Fold this div and try deleting evrything inbetween -->
                                        <?php foreach($reports as $key => $value) {?>
                                            <?php foreach($users as $key1 => $user) {
                                                if($user['ContID'] == $value['ContID']) {?>
                                            <div class = "sec new">
                                                <a href = "https://codepen.io/Golez/">
                                                    <div class = "profCont">
                                                        <img class = "profile" src = "<?php echo BASE_URL.'/public/images/uploads/'.$user['IMAGE']?>">
                                                    </div>
                                                    <div class = "txt"><?php echo $value['TITLE']?></div>
                                                    <div class = "txt sub"><?php echo $value['SDATE']?></div>
                                                </a>
                                            </div>
                                            <?php }}?>
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="" style="margin-top: -15px">
                    <ul class="login__header__nav" >
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
    </div>
</body>