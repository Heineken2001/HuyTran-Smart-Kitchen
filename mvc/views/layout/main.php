<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/grid.css">
    <link rel="stylesheet" href="../../public/css/app.css">
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
    <?php include '../Doandanganh/mvc/views/components' ?>
</body>
</html>