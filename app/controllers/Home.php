<?php 

class Home extends Controller {
    public function home(){
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/home');
        $this->view('templates/footer');
    }
    public function tanamanpangan(){
        $data['judul'] = 'Tanaman Pangan';
        $this->view('templates/header', $data);
        $this->view('home/tanamanpangan');
        $this->view('templates/footer');
    }
    public function tpklik(){
        $data['judul'] = 'Tips';
        $nama = $_GET['nama'];
        $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);
        $this->view('templates/header', $data);
        $this->view('tips/tips');
        $this->view('templates/footer');
    }
    public function tanamanhias(){
        $data['judul'] = 'Tanaman Hias';
        $this->view('templates/header', $data);
        $this->view('home/tanamanhias');
        $this->view('templates/footer');
    }
}