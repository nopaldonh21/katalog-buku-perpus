<?php

    $tabel = 'tb_buku';
    $sql = "SELECT * FROM $tabel";
    $jalan = mysqli_query($con, $sql);
    $hasil = mysqli_num_rows($jalan);

?>

<div class="container box-home">
    <div class=" box-home-content">
        <a href="index.php?page=buku&menu=daftarBuku" class="text-decoration-none">
            <div class="card mb-3 card-home">
                <div class="card-home-img">
                    <img src="img/home-perpus.jpg" class="card-img-top" alt="..." >
                </div>            
                <div class="card-body text-dark bg-light">
                    <h5 class="card-title">Katalog Buku Perpustakaan</h5>
                    <p class="card-text">Jumlah buku yang ada di perpustakaan online ini sebanyak <?= $hasil ?> judul buku.</p>
                    <p class="card-text"><small class="text-muted">SMK Wikrama Bogor</small></p>
                </div>
            </div>
        </a>
    </div>
</div>