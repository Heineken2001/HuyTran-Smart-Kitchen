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
    
    <div style="">
        <div class="grid wide container">
            <div class="row" style="display:flex; justify-content:space-between; align-items:center;">
                <!-- <i class="fa-solid fa-bars" style="font-size: 30px; margin: auto 0;"></i>
                <input type="checkbox" name="navmobile" id="navmobile">
                <label for="navmobile">Ken</label> -->
                <div class="login__header" >
                <a href="<?php echo BASE_URL ?>/<?php if (isset($_SESSION['user']) && $_SESSION['user']=="admin") echo "admin"?>" style="text-decoration:none"><img src="<?php echo BASE_URL?>/public/images/logokitchen.png" alt="" class="logokitchen" width=100 style="margin: -10px;"></a> 
                </div>
            
                <?php if (isset($_SESSION['user']) && $_SESSION['user']=="admin") {?>
                <div class="col l-5 m-5 c-0" style="margin-top: 15px; z-index: 1">
                        <!-- <h1 style="float: right;">HI</h1> -->
                    <div class = "icons">
                        <div class = "notification">
                            <a href = "#">
                                <div class = "notBtn" href = "#">
                                <!--Number supports double digets and automaticly hides itself when there is nothing between divs -->
                                    <div class = "number">10</div>
                                    <i class="fas fa-bell"></i>
                                    <div class = "box">
                                        <div class = "display">
                                            <div class = "nothing"> 
                                                <i class="fas fa-child stick"></i> 
                                                <div class = "cent">Looks Like your all caught up!</div>
                                            </div>
                                            <div class = "cont"><!-- Fold this div and try deleting evrything inbetween -->
                                                <div class = "sec new">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "https://c1.staticflickr.com/5/4007/4626436851_5629a97f30_b.jpg">
                                                        </div>
                                                        <div class = "txt">James liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/7 - 2:30 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec new">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "https://obamawhitehouse.archives.gov/sites/obamawhitehouse.archives.gov/files/styles/person_medium_photo/public/person-photo/amanda_lucidon22.jpg?itok=JFPi8OFJ">
                                                        </div>
                                                        <div class = "txt">Annita liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/7 - 2:13 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3O45RK9qyCrZJivYsY6PmeVEJH07l7bkoolJmscBsNjzump27">
                                                        </div>
                                                        <div class = "txt">Brie liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/6 - 9:35 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "https://c1.staticflickr.com/4/3725/10214643804_75c0b6eeab_b.jpg">
                                                        </div>
                                                        <div class = "txt">Madison liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/6 - 4:04 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src="https://upload.wikimedia.org/wikipedia/commons/5/52/NG_headshot_white_shirt_square_Jan18.jpg">
                                                        </div>
                                                        <div class = "txt">Ted liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/6 - 10:37 am</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "https://upload.wikimedia.org/wikipedia/commons/d/dd/Pat-headshot-square.jpg">
                                                        </div>
                                                        <div class = "txt">Tommas liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/5 - 7:30 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "https://c1.staticflickr.com/8/7407/13785133614_6254abb8c4.jpg">
                                                        </div>
                                                        <div class = "txt">Claire liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/5 - 2:30 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "//c1.staticflickr.com/1/185/440890151_54c5b920b0_b.jpg">
                                                        </div>
                                                        <div class = "txt">Jerimaiah liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/5 - 1:34 pm</div>
                                                    </a>
                                                </div>
                                                <div class = "sec">
                                                    <a href = "https://codepen.io/Golez/">
                                                        <div class = "profCont">
                                                            <img class = "profile" src = "//c2.staticflickr.com/4/3397/3585544855_28442029a5_z.jpg?zz=1">
                                                        </div>
                                                        <div class = "txt">Debra liked your post: "Pure css notification box"</div>
                                                        <div class = "txt sub">11/5 - 10:20 am</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div style="margin-top: -15px">
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