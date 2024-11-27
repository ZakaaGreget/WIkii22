<?php

class App {

    protected $controller = 'home';
    protected $method = 'home';
    protected $params = [];


    public function __construct(){
        $url = $this->parseURL();
        
        //controller

        if (isset($url) and ! is_null($url)) {
            
            
            if (preg_match('/^[a-zA-Z0-9_-]+$/', $url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                die('Invalid controller name or controller file not found.');
            }
            
            // if( file_exists('../app/controllers/' . $url[0] . '.php')){
            //     $this->controller = $url[0];
            //     unset($url[0]); 
    
            // }
        }
        
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    
        //method
        if(isset($url[1])){
            if (preg_match('/^[a-zA-Z0-9_-]+$/', $url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else if (isset($url[1])) {
                die('Invalid method name or method not found.');
            }
            

            // if (isset($url[1]) && preg_match('/^[a-zA-Z0-9_-]+$/', $url[1]) && method_exists($this->controller, $url[1])) {
            //     $this->method = $url[1];
            //     unset($url[1]);
            // } else if (isset($url[1])) {
            //     die('Invalid method name or method not found.');
            // }

            // if( method_exists($this->controller, $url[1])){
            //     $this->method = $url[1];
            //     unset($url[1]);
            // }
        }

        //params
        // if(! empty($url)){
        //     $this->params = array_values($url);
            
        // }

        // if (!empty($_SERVER['QUERY_STRING'])) {
        //     parse_str($_SERVER['QUERY_STRING'], $queryParams);
        //     error_log('Query Params: ' . print_r($queryParams, true)); // Log untuk memeriksa query string
        // }

        $this->params = $url ? array_values($url) : [];
        //jalankan contorller dan method, dan kirim params kalau ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    public function parseURL(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            



            // Debug: Menampilkan seluruh query string
            if (!empty($_SERVER['QUERY_STRING'])) {
                parse_str($_SERVER['QUERY_STRING'], $queryParams);
                error_log('Query Params: ' . print_r($queryParams, true));
            }
            if (!isset($_GET['url'])) {
                return null; // Mengembalikan null jika tidak ada URL.
            }

            return $url;
        }


    }
}

