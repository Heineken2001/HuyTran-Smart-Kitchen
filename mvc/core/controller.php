<?php
    class Controller {
        protected $load = array();
        protected $api = array();
        public function __construct() {
            $this->load = new Load();
            $this->api = new Api();
        }
        public function getdata() {}
    }