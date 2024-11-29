
    <div class="back">
        <a href="<?= BASEURL; ?>/home"><img src="<?= BASEURL; ?>/img/back.png" alt="Tombol Kembali"></a>
    </div>

   <div class="tanaman">
        <img src="<?= BASEURL; ?>/img/bibit <?= $data['pangan']['nama']; ?>.png" alt="Gambar Tanaman <?= $data['pangan']['nama']; ?> ">
        <h1>Bibit <?= $data['pangan']['nama']; ?> </h1>
   </div>




   
   <div class="ciritanaman">
    <h3>Ciri Ciri Tanaman</h3>
    <p><i>
        <?php if (!empty($data['pangan'])): ?>
            <?= $data['pangan']['ciri']; ?>  
        <?php else: ?>
            <p>Data tanaman tidak ditemukan.</p>
        <?php endif; ?>

       
    </i></p>
   </div>
   
           

   <div class="penanaman" style="background-color: #f1f7ef;">
    <h3>Cara Penanaman</h3>
    <p><i>Tata cara penanaman bibit mangga dapat dilakukan dengan beberapa cara, yaitu: biji OBED</i></p>
    <ul>
        <i>
            <?php if (!empty($data['pangan'])): ?>
                <?= $data['pangan']['cara']; ?>  
            <?php else: ?>
                <p>Data tanaman tidak ditemukan.</p>
            <?php endif; ?>
           
            
        </i>
    </ul>
   </div>

   <div class="perawatan">
    <h3>Perawatan Khusus</h3>
    <p><i>Selain cara penanaman, ada beberapa hal yang perlu diperhatikan untuk menanam pohon mangga, yaitu:</i></p>
    <ul>
        <i> 
            <?php if (!empty($data['pangan'])): ?>
                <?= $data['pangan']['perawatan']; ?>  Menampilkan data ciri tanaman
            <?php else: ?>
                <p>Data tanaman tidak ditemukan.</p>
            <?php endif; ?>


            <!-- <?php foreach( $data['pangan'] as $rawat) : ?>
                <?= $rawat['perawatan']; ?>  liat models yg tips
            <?php endforeach; ?> -->
        </i>
    </ul>
   </div>
