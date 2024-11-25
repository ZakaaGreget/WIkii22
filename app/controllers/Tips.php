<?php 

class Tips extends Controller{

    public function home(){
        $data['judul'] = 'Tips';
        $data['ciri'] = $this->model('Tips_model')->getCiri();
        $data['cara'] = $this->model('Tips_model')->getCara();
        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');
    }
    public function page(){
        
       
        echo 'tips/page';
        
    }


}