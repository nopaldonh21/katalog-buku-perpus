<?php

$go = new oop();	

	if(isset($_POST['simpan'])) {
		$tabel = 'tb_buku';
		$field = array(
				'nama_guru' => @$_POST['nama_guru'],
				'kode_buku' => @$_POST['kode_buku'],
				'judul' => @$_POST['judul'],				
				'pengarang' => @$_POST['pengarang']);
				
		$redirect = "?page=buku&menu=daftarBuku";	
		
		$go->simpan($con, $tabel, $field, $redirect);
		header('location:index.php'.$redirect);
        exit;
	}

?>

<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="mb-3 row">
			<label for="inputNamaGuru" class="col-sm-2 col-form-label">Nama Guru</label>
			<div class="col-sm-10">
				<input type="text" name="nama_guru" class="form-control" id="">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="inputKodeBuku" class="col-sm-2 col-form-label">Kode Buku</label>
			<div class="col-sm-10">
				<input type="text" name="kode_buku" class="form-control" id="">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-10">
				<input type="text" name="judul" class="form-control" id="">
			</div>
		</div>
		<div class="mb-3 row">
			<label for="inputPengarang" class="col-sm-2 col-form-label">Pengarang</label>
			<div class="col-sm-10">
				<input type="text" name="pengarang" class="form-control" id="">
			</div>
		</div>
		<input type="submit" name="simpan" class="btn btn-primary form-control" value="Simpan">
	</form>
</div>