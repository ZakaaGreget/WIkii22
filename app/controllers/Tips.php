<?php 

class Tips extends Controller{

    public function home(){
        $data['judul'] = 'Tips';
        $this->view('templates/header', $data);
        $this->view('tips/tips');
        $this->view('templates/footer');
    }
    public function page(){
        
       
        echo 'tips/page';
        
    }


}