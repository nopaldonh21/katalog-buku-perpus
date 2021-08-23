<div class="container box-home pt-5 pb-5">
	<div class="container mb-2">	
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link <?php if(@$_GET['menu']=='daftarBuku') echo 'active'; ?>" aria-current="page" href="?page=buku&menu=daftarBuku"><strong>Daftar Buku</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if(@$_GET['menu']=='tambahBuku') echo 'active'; ?>" aria-current="page" href="?page=buku&menu=tambahBuku"><strong>Tambah</strong></a>
			</li>
		</ul>			
	</div>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h2 class="pt-2">
					<strong>
					<?php
						if(@$_GET['menu']=='daftarBuku'){
							echo "Daftar Buku";
						}elseif (@$_GET['menu']=='tambahBuku') {
							echo "Tambah Buku";
						}
					?>
					</strong>
				</h2>
			</div>
			<div class="card-body">
			<?php
				switch(@$_GET['menu']){
					case 'daftarBuku';
					include 'buku/daftarBuku.php';
					break;

					case 'tambahBuku';
					include 'buku/tambahBuku.php';
					break;                
				}
			?>
			</div>
		</div>
	</div>
</div>