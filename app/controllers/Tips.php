<?php 

class Tips extends Controller{

    public function home(){
        $data['judul'] = 'Tips';
        $nama = $_GET['nama'];
        $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);
        // $data['pangan'] = $this->model('Tips_model')->getAllPangan;

        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');
    }
    

}