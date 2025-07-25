<?php
    class App {
        // property
        protected $controller = "home";
        protected $method = "index";
        protected $params = [];

        public function __construct(){
            $url = $this->parseURL();
            // cari direktori controllers (controller)
            if ($url && isset($url[0]) && file_exists("../app/controllers/" . $url[0] . ".php")) {// cek $url tidak kosong dan $url[0] ada
               $this->controller = $url[0]; //ganti dengan controller baru
               unset($url[0]);
            }

            require_once "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;

            // method
            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            // params
            if (!empty($url)) {
                $this->params = array_values($url);
            }
            // jalankan controller & method, serta kirimkan params jika ada
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseURL(){
            if (isset ($_GET["url"])) {
                $url = rtrim($_GET["url"], "/"); //rtrim untuk menghilangkan / pada akhir url
                $url = filter_var($url, FILTER_SANITIZE_URL); //agar url bersih dari karakter aneh
                $url = explode("/", $url); //untuk memecah  string $url menjadi array
                return $url;
            }
        }
    }
