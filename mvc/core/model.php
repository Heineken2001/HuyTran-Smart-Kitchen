<?php
    class Model {
        protected $db = array();
        public $light = array();
        public function __construct() {
            $connect = 'mysql:dbname=shouse; host=localhost; charset=utf8';
            $user = 'root';
            $pass = '';
            $this->db = new Database($connect, $user, $pass);

        }
    }