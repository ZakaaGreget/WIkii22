<?php 

class Tips extends Controller{

    public function home(){
        $data['judul'] = 'Tips';

        $data['pangan'] = $this->model('Tips_model')->getAllPangan();

        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');
    }
    public function page(){
        
       
        echo 'tips/page';
        
    }


}