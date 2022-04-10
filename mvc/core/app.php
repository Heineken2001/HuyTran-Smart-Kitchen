<?php
    
    class App {
        public $controllerName="index";
        public $methodName="index";
        public $controllerPath = './mvc/controllers/';
        public $controller;
        public $url;

        public function __construct() {
            $this->urlProcess();
            $this->loadController();
            $this->callMethod();
            // Array ( [0] => Ken [1] => Huy [2] => 1 [3] => 2 [4] => 3 )
            // $arr = $this -> UrlProcess();
            
            // if (is_null($arr)) {
            //     $arr[0] = "home";
            // }
            // if (file_exists("./mvc/controllers/".$arr[0].".php")) {
            //     $this->controller = $arr[0];
            //     unset($arr[0]);
            // }
            // require_once "./mvc/controllers/".$this->controller.".php";
            
            // //  Action
            // if (isset($arr[1])) {
            //     if (method_exists($this->controller, $arr[1])) {
            //         $this->action = $arr[1];
            //     }
            //     unset($arr[1]);
            // }

            // // Params
            // $this->params = $arr?array_values($arr):[];

            // call_user_func_array([new $this->controller, $this->action], $this->params);


            // if (isset($url[0])) {
            //     include_once('./mvc/controllers/'.$url[0].'.php');
            //     $ctrl = new $url[0]();
            //     if (isset($url[2])) {
            //         $ctrl->{$url[1]}($url[2]);
            //     }
            //     else {
            //         if (isset($url[1])) {
            //             $ctrl->{$url[1]}();
            //         }

            //     }
            // }
            // else {
            //     include_once('./mvc/controllers/index.php');
            //     $index = new index();
            //     $index->homepage();
            // }

        }

        public function urlProcess() {
            $this->url = isset($_GET['url']) ? $_GET['url'] : null;

            if ($this->url != null) {
                $this->url = rtrim($this->url, '/');
                $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
            }
            else {
                unset($this->url);
            }
        }

        public function loadController() {
            if (!isset($this->url[0])) {
                include $this->controllerPath.$this->controllerName.'.php';
                $this->controller = new $this->controllerName();
            }
            else {
                $this->controllerName = $this->url[0];
                $filename = $this->controllerPath.$this->controllerName.'.php';
                if (file_exists($filename)) {
                    include $filename;
                    if (class_exists($this->controllerName)) {
                        if ($this->controllerName == "admin") {
                            if (isset($_SESSION['user']) && $_SESSION['user'] == "admin") {
                                $this->controller = new $this->controllerName();
                            }
                            else header('Location: '.BASE_URL.'/index/notfound');
                        }
                        else {
                            if (isset($_SESSION['user']) && $_SESSION['user'] == "admin" && $this->controllerName != "logout") {
                                header('Location: '.BASE_URL.'/index/notfound');
                            }
                            else {
                                $this->controller = new $this->controllerName();
                            }
                        }
                    }
                    else {
                        header('Location: '.BASE_URL.'/index/notfound');
                    }
                }
                else {
                    header('Location: '.BASE_URL.'/index/notfound');
                }
            }
        }

        public function callMethod() {
            if (isset($this->url[2])) {
                $this->methodName = $this->url[1];
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}($this->url[2]);
                }
                else {
                    header('Location: '.BASE_URL.'/index/notfound');
                }
            }
            else {
                if (isset($this->url[1])) {
                    $this->methodName = $this->url[1];
                    if (method_exists($this->controller, $this->methodName)) {
                        $this->controller->{$this->methodName}();
                    }
                    else {
                        header('Location: '.BASE_URL.'/index/notfound');
                    }
                }
                else {
                    if (method_exists($this->controller, $this->methodName)) {
                        $this->controller->{$this->methodName}();
                    }
                    else {
                        header('Location: '.BASE_URL.'/index/notfound');
                    }
                }
            }
        }
        
    }