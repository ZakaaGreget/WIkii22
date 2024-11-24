<?php 

class Home extends Controller {
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
    public function tanamanpangan(){
        
        
        echo 'home/pangan';
        
    }
    public function tanamanhias(){
        
       
        echo 'home/hias';
       
    }
}