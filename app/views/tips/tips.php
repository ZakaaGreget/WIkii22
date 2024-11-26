
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
        <?php foreach( $data['pangan'] as $ciriT) : ?>
            <?= $ciriT['ciri']; ?> <!-- liat models yg tips -->
        <?php endforeach; ?>
    </i></p>
   </div>

   <div class="penanaman">
    <h3>Cara Penanaman</h3>
    <p><i>Tata cara penanaman bibit mangga dapat dilakukan dengan beberapa cara, yaitu:</i></p>
    <ul>
        <i>
            
?>
            <?php foreach( $data['pangan'] as $caraT) : ?>
                <?= $caraT['cara']; ?> liat models yg tips
            <?php endforeach; ?>
        </i>
    </ul>
   </div>

   <div class="perawatan">
    <h3>Perawatan Khusus</h3>
    <p><i>Selain cara penanaman, ada beberapa hal yang perlu diperhatikan untuk menanam pohon mangga, yaitu:</i></p>
    <ul>
        <i> 
            <?php foreach( $data['pangan'] as $rawat) : ?>
                <?= $rawat['perawatan']; ?> <!-- liat models yg tips -->
            <?php endforeach; ?>
        </i>
    </ul>
   </div>
