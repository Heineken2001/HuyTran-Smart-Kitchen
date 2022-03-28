<?php
class Load {
    public function __construct() {

    }

    public function model($model) {
        include_once "./mvc/models/".$model.".php";
        return new $model();
    }

    public function view($view, $data = null) {
        if (isset($data)) {
            extract($data);
        }
        include_once "./mvc/views/".$view.".php";
    }
}