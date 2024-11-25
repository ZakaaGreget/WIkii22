<?php 

class Tips_model {
    private $ciriT = [
        [
            "nama" => "Mangga",
            "ciri"=> "Pohon mangga berperawakan besar, dapat mencapai tinggi hingga 30 m atau lebih, 
        meski kebanyakan mangga pekarangan hanya sekitar 15 m atau kurang.
        Batang tegak, bercabang kuat; dengan daun-daun lebat membentuk tajuk yang indah berbentuk kubah, 
        oval atau memanjang, dengan diameter sampai 10 m. Kulit batangnya tebal dan kasar
        dengan banyak celah-celah kecil dan sisik-sisik bekas tangkai daun. 
        Warna<U> pepagan</U>(kulit batang) yang sudah tua biasanya cokelat keabuan, kelabu tua sampai hampir hitam.",
        ]
    ];

    public function getAll(){
        return $this->ciriT;
    }
}

