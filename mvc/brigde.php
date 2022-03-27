<?php
    spl_autoload_register(function ($class) {
        include_once './mvc/core/'.$class.'.php';
    });
    include_once './mvc/config/config.php';
    // require_once './mvc/core/app.php';
    // require_once './mvc/core/controller.php';
    // //require_once './mvc/core/db.php';
    // require_once './mvc/core/Load.php';
    // require_once './mvc/core/database.php';
    // require_once './mvc/core/model.php';