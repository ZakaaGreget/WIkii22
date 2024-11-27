<?php 

class Tips extends Controller{

    public function home(){

     


        $data['judul'] = 'Tips';
         // Validasi parameter 'nama'
        // if (isset($_GET['nama']) && !empty($_GET['nama'])) {
        //     $nama = $_GET['nama'];
        //     $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);
        // } else {
        //     $data['pangan'] = []; // Atur data kosong jika 'nama' tidak ditemukan
        // }
    
        
        // var_dump($nama);
        // if (!$nama) {
        //     die('Parameter "nama" tidak ditemukan di URL!');
        // }
        
        // $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);
        $data['pangan'] = $this->model('Tips_model')->getAllPangan();

        $this->view('templates/header', $data);
        $this->view('tips/tips', $data);
        $this->view('templates/footer');
    
    













           // $data['judul'] = 'Tips';
        // $nama = isset($_GET['nama']) ? $_GET['nama'] : null;
        // var_dump($nama);
        // if ($nama) {
        //     // Fetch data from the model
        //     $data['pangan'] = $this->model('Tips_model')->getTanamanbyName($nama);

        //     // Handle the case where no plant is found
        //     if (empty($data['pangan'])) {
        //         $data['error'] = "Tanaman dengan nama '$nama' tidak ditemukan.";
        //     }
        // } else {
        //     $data['error'] = "Parameter 'nama' tidak ditemukan di URL!";
        // }

        // $this->view('templates/header', $data);
        // $this->view('tips/tips', $data);
        // $this->view('templates/footer');    


    }
}