
    <div class="back">
        <a href="<?= BASEURL; ?>/home"><img src="<?= BASEURL; ?>/img/back.png" alt="Tombol Kembali"></a>
    </div>

   <div class="tanaman">
        <img src="<?= BASEURL; ?>/img/bibit mangga.png" alt="Gambar Tanaman Mangga">
        <h1>Bibit Mangga</h1>
   </div>

   <div class="ciritanaman">
    <h3>Ciri Ciri Tanaman</h3>
    <p><i>
        <?php foreach( $data['ciri'] as $ciriT) : ?>
            <?= $ciriT['ciri'] ?> <!-- liat models yg tips -->
        <?php endforeach; ?>
    </i></p>
   </div>

   <div class="penanaman">
    <h3>Cara Penanaman</h3>
    <p><i>Tata cara penanaman bibit mangga dapat dilakukan dengan beberapa cara, yaitu:</i></p>
    <ul>
        <i>
            <?php foreach( $data['cara'] as $caraT) : ?>
                <?= $caraT['isi'] ?> <!-- liat models yg tips -->
            <?php endforeach; ?>
        </i>
    </ul>
   </div>

   <div class="perawatan">
    <h3>Perawatan Khusus</h3>
    <p><i>Selain cara penanaman, ada beberapa hal yang perlu diperhatikan untuk menanam pohon mangga, yaitu:</i></p>
    <ul>
        <i> 1. Pilih lokasi yang tepat, yaitu tempat yang mendapat sinar matahari penuh selama 6-8 jam sehari. <br> 
            2. Gunakan tanah yang baik, dengan pH antara 6-7 dan drainase yang baik.<br> 
            3. Pilih varietas yang sesuai dengan iklim dan lokasi. <br> 
            4. Siram pohon mangga secara teratur, terutama saat musim kemarau. <br>
            5. Beri pupuk yang mengandung unsur hara seperti nitrogen, fosfor, dan kalium secara teratur. <br> 
            6. Lindungi pohon mangga dari hama dan penyakit. <br>
            7. Lakukan pemangkasan rutin pada bagian batang, tangkai, dan daun mati.</i>
    </ul>
   </div>
