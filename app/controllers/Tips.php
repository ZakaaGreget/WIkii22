<?php 

class Tips extends Controller{

    public function home(){
        $data['judul'] = 'Tips';
         // Validasi parameter 'nama'
    if (isset($_GET['nama']) && !empty($_GET['nama'])) {
        $nama = $_GET['nama'];
        $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);
    } else {
        $data['pangan'] = []; // Atur data kosong jika 'nama' tidak ditemukan
    }

        // $nama = $_GET['nama'];
        // $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);
        // $data['pangan'] = $this->model('Tips_model')->getAllPangan;

        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');
    }
    

}