<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            padding: 20px;

        }
        .header, .footer {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="header"></div>
    <div class="content">
        <?php 
            while ($row = mysqli_fetch_assoc($data["sv"])) {
                echo $row["namsinh"];
            }
        ?>
    </div>
    <div class="footer"></div>
</body>
</html>