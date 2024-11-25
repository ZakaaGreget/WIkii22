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
    private $caraT = [
        [
            "head" => "Tata cara penanaman bibit mangga dapat dilakukan dengan beberapa cara, yaitu:",
            "isi" =>  "1. Semai biji <br> 
            2. Pilih biji mangga yang sehat dan kuat, lalu keringkan dan kupas kulitnya. 
            Semai biji di kotak semai dengan bagian perut menghadap ke bawah. 
            Pastikan bibit tidak kekurangan air selama proses penyemaian. <br> 
            3. Okulasi <br> 
            4. Tempelkan tunas batang dari pohon mangga yang berkualitas ke batang bawah pohon yang kuat. 
            Okulasi sebaiknya dilakukan di musim kemarau agar bagian yang ditempelkan tidak membusuk. <br> 
            5. Cangkok <br> 
            6. Pilih batang yang berdiameter 2,5 cm dan berasal dari tanaman yang berumur minimal 1 tahun. 
            Buat sayatan sepanjang 5 cm, lalu beri pupuk kandang dan bungkus dengan sabut kelapa dan plastik.",
            
        ]
    ];
    private $perawatan = [
        [
            "head" => "Selain cara penanaman, ada beberapa hal yang perlu diperhatikan untuk menanam pohon mangga, yaitu:",
            "isi" =>  "1. Pilih lokasi yang tepat, yaitu tempat yang mendapat sinar matahari penuh selama 6-8 jam sehari. <br> 
            2. Gunakan tanah yang baik, dengan pH antara 6-7 dan drainase yang baik.<br> 
            3. Pilih varietas yang sesuai dengan iklim dan lokasi. <br> 
            4. Siram pohon mangga secara teratur, terutama saat musim kemarau. <br>
            5. Beri pupuk yang mengandung unsur hara seperti nitrogen, fosfor, dan kalium secara teratur. <br> 
            6. Lindungi pohon mangga dari hama dan penyakit. <br>
            7. Lakukan pemangkasan rutin pada bagian batang, tangkai, dan daun mati.",
        ]
    ];

    public function getCiri(){
        return $this->ciriT;
    }
    public function getCara(){
        return $this->caraT;
    }
    public function getPerawatan(){
        return $this->perawatan;
    }
}

