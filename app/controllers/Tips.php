<?php 
class Tips {

    public function home(){
        // Mengambil nama dari query string
        $nama = isset($_GET['nama']) ? $_GET['nama'] : null;

        // Debugging untuk memastikan nilai nama
        error_log('Nama yang diterima: ' . $nama);
        
        //GET TANAMAN BY NAME
        // Jika ada parameter nama, lakukan pencarian di database
        // if ($nama) {
        //     $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($name);
        //     error_log('Data Pangan: ' . print_r($data['pangan'], true));
        // } else {
        //     $data['pangan'] = []; // Jika tidak ada nama, kirim data kosong
        // }
       

        //GET SEMUAA
        $data['pangan'] = $this->model('Tips_model')->getAllPangan();
        
        // Menampilkan view
        $data['judul'] = 'Tips';
        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');

        
    }

    // Mengambil model yang diperlukan
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    // Menampilkan view yang diperlukan
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }

    
}
