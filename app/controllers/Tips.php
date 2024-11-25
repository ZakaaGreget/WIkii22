<?php 

class Tips extends Controller{

    public function home(){
        $data['judul'] = 'Tips';
        $data['ciri'] = $this->model('Ciri_model')->getCiri();
        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');
    }
    public function page(){
        
       
        echo 'tips/page';
        
    }


}