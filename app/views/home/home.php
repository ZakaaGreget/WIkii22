
   <div class="container">
        <img src="<?= BASEURL; ?>/img/tampilan awal.png" alt="Seseorang Memegang Tanaman">
        <div class="text">
            <h1>Rawat Tanamanmu<br>Hijaukan Rumahmu</h1>
            <p>Disini anda dapat menemukan berbagai 
            <br>macam tips dan panduan perawatan 
            <br>tanaman. Jadikan pengalaman bertani lebih 
            <br>mudah dan menyenangkan bersama kami!</p>
        </div>
   </div>

   <div class="atas">
    <div class="choose">
        <h3>Pilih Tanamanmu Disini</h3>
    </div>
    
    <form id="searchForm" method="POST" action="<?= BASEURL; ?>/tips">
        <div class="search">
            <input type="text" id="searchBar" name="nama" placeholder="Cari">
        </div>
    </form>
</div>

<script>
    // Ambil elemen-elemen yang diperlukan
    const basePath = "<?= BASEURL; ?>/tips";
    const searchForm = document.getElementById("searchForm");
    const searchInput = document.getElementById("searchBar");

    // Tambahkan event listener pada form
    searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman
        
        // Ambil nilai input
        const searchValue = searchInput.value.trim();
        
        // Validasi input kosong
        if (searchValue === "") {
            alert('Search bar tidak boleh kosong!');
        } else {
            // Redirect ke URL dengan query string
            const queryString = `?nama=${encodeURIComponent(searchValue)}`;
            window.location.href = basePath + queryString;
        }
    });
</script>





  
   <!--Kategori-->
    <div class="kategori">
        <div class="tanaman-hias">
            <a href="<?= BASEURL; ?>/home/tanamanhias"><img src="<?= BASEURL; ?>/img/tanaman hias.png" alt="Gambar Tanaman Hias"></a>
            <p>Tanaman Hias</p>          
        </div>
        <div class="tanaman-hias">
            <a href="<?= BASEURL; ?>/home/tanamanpangan"><img src="<?= BASEURL; ?>/img/tanaman pangan.png" alt="Gambar Tanaman Pangan"></a>
            <p>Tanaman Pangan</p>
        </div>
    </div>
   
    <!--PRODUCT-->
    <section class="tanaman1-grid">
        <ul class="tanaman1">
            <li><a href="<?= BASEURL; ?>/tips?nama=Mangga"><img src="<?= BASEURL; ?>/img/bibit mangga.png" alt="Bibit Mangga"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Mangga">Bibit Mangga</a></li>
        </ul>
        <ul class="tanaman2">
            <li><a href="<?= BASEURL; ?>/tips?nama=jeruk nipis"><img src="<?= BASEURL; ?>/img/bibit jeruk nipis.png" alt="Bibit Jeruk Nipis"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=jeruk nipis">Bibit Jeruk Nipis</a></li>
        </ul>
        <ul class="tanaman3">
            <li><a href="<?= BASEURL; ?>/tips?nama=Nangka"><img src="<?= BASEURL; ?>/img/bibit nangka.png" alt="Bibit Nangka"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Nangka">Bibit Nangka</a></li>
        </ul>
        <ul class="tanaman4">
            <li><a href="<?= BASEURL; ?>/tips?nama=Kaktus"><img src="<?= BASEURL; ?>/img/bibit kaktus.png" alt="Kaktus"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Kaktus">Kaktus</a></li>
        </ul>
    </section>

    <section class="tanaman2-grid">
        <ul class="tanaman5">
            <li><a href="<?= BASEURL; ?>/tips?nama=Tomat"><img src="<?= BASEURL; ?>/img/bibit tomat.png" alt="Bibit Tomat"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Tomat">Bibit Tomat</a></li>
        </ul>
        <ul class="tanaman6">
            <li><a href="<?= BASEURL; ?>/tips?nama=Rambutan"><img src="<?= BASEURL; ?>/img/bibit rambutan.png" alt="Bibit Rambutan"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Rambutan">Bibit Rambutan</a></li>
        </ul>
        <ul class="tanaman7">
            <li><a href="<?= BASEURL; ?>/tips?nama=Sri Rejeki"><img src="<?= BASEURL; ?>/img/bibit sri rejeki.png" alt="Sri Rejeki"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Sri Rejeki">Sri Rejeki</a></li>
        </ul>
        <ul class="tanaman8">
            <li><a href="<?= BASEURL; ?>/tips?nama=Monstera"><img src="<?= BASEURL; ?>/img/bibit monstera.png" alt="Monstera"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Monstera">Monstera</a></li>
        </ul>
    </section>

    <section class="tanaman3-grid">
        <ul class="tanaman9">
            <li><a href="<?= BASEURL; ?>/tips?nama=Alpukat"><img src="<?= BASEURL; ?>/img/bibit alpukat.png" alt="Bibit Alpukat"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Alpukat">Bibit Alpukat</a></li>
        </ul>
        <ul class="tanaman10">
            <li><a href="<?= BASEURL; ?>/tips?nama=Kuping Gajah"><img src="<?= BASEURL; ?>/img/bibit kuping gajah.png" alt="Kuping Gajah"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Kuping Gajah">Kuping Gajah</a></li>
        </ul>
        <ul class="tanaman11">
            <li><a href="<?= BASEURL; ?>/tips?nama=Durian"><img src="<?= BASEURL; ?>/img/bibit durian.png" alt="Bibit Durian"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Durian">Bibit Durian</a></li>
        </ul>
        <ul class="tanaman12">
            <li><a href="<?= BASEURL; ?>/tips?nama=Gelombang Cinta"><img src="<?= BASEURL; ?>/img/bibit gelombang cinta.png" alt="Gelombang Cinta"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Gelombang Cinta">Gelombang Cinta</a></li>
        </ul>
    </section>

    <section class="tanaman4-grid">
        <ul class="tanaman13">
            <li><a href="<?= BASEURL; ?>/tips?nama=Oxalis"><img src="<?= BASEURL; ?>/img/bibit oxalis.png" alt="Oxalis"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Oxalis">Oxalis</a></li>
        </ul>
        <ul class="tanaman14">
            <li><a href="<?= BASEURL; ?>/tips?nama=Sawo"><img src="<?= BASEURL; ?>/img/bibit sawo.png" alt="Bibit Sawo"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Sawo">Bibit Sawo</a></li>
        </ul>
        <ul class="tanaman15">
            <li><a href="<?= BASEURL; ?>/tips?nama=Matoa"><img src="<?= BASEURL; ?>/img/bibit matoa.png" alt="Bibit Matoa"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Matoa">Bibit Matoa</a></li>
        </ul>
        <ul class="tanaman16">
            <li><a href="<?= BASEURL; ?>/tips?nama=Pilea"><img src="<?= BASEURL; ?>/img/bibit pilea.png" alt="Pilea"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Pilea">Pilea</a></li>
        </ul>
    </section>

    <section class="tanaman5-grid">
        <ul class="tanaman17">
            <li><a href="<?= BASEURL; ?>/tips?nama=Stroberi"><img src="<?= BASEURL; ?>/img/bibit stroberi.png" alt="Bibit Stroberi"></a></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Stroberi">Bibit Stroberi</a></li>
        </ul>
        <ul class="tanaman18">
            <li><a href="<?= BASEURL; ?>/tips?nama=Jambu"><img src="<?= BASEURL; ?>/img/bibit jambu.png" alt="Bibit Jambu"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Jambu">Bibit Jambu</a></li>
        </ul>
        <ul class="tanaman19">
            <li><a href="<?= BASEURL; ?>/tips?nama=Tin"><img src="<?= BASEURL; ?>/img/bibit buah tin.png" alt="Bibit Buah Tin"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Tin">Bibit Tin</a></li>
        </ul>
        <ul class="tanaman20">
            <li><a href="<?= BASEURL; ?>/tips?nama=Peperomia"><img src="<?= BASEURL; ?>/img/bibit peperomia.png" alt="Peperomia"></a></li>
            <li><a href="<?= BASEURL; ?>/tips?nama=Peperomia">Peperomia</a></li>
        </ul>
    </section>