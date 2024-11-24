<?php 

class Home extends Controller {
    public function index(){
        $this->view('home/index');
    }
    public function tanamanpangan(){
        echo 'home/pangan';
    }
    public function tanamanhias(){
        echo 'home/hias';
    }
}