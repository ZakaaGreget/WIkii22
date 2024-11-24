<?php 

class Tips extends Controller{

    public function index(){
        $data['judul'] = 'Tips';
        $this->view('templates/header', $data);
        $this->view('tips/index');
       
    }
    public function page(){
        
       
        echo 'tips/page';
        
    }


}