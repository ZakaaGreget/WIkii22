<?php

class App {

protected $controller = 'home';
protected $method = 'home';
protected $params = [];

public function __construct(){
    $url = $this->parseURL();

    // controller
    if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
        $this->controller = $url[0];
        unset($url[0]);
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // method
    if (isset($url[1]) && method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
    }

    // params
    $this->params = !empty($url) ? array_values($url) : [];

    // jalankan controller dan method, kirim params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
}

public function parseURL(){
    // Pisahkan URL path dari query string
    if (isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url); // Pisahkan berdasarkan '/'

        // Debug untuk melihat nilai URL
        error_log('URL Path: ' . print_r($url, true)); // Debug URL Path

        // Jika ada query string, simpan di params global $_GET
        if (!empty($_SERVER['QUERY_STRING'])) {
            parse_str($_SERVER['QUERY_STRING'], $queryParams);
            $_GET = array_merge($_GET, $queryParams); // Menggabungkan query string ke $_GET

            // Debug untuk memastikan query string ditambahkan ke $_GET
            error_log('Query Params: ' . print_r($queryParams, true)); // Debug query string
        }

        return $url;
    }
    return null; // Jika tidak ada URL
}

}
