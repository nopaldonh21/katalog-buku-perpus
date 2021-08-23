<?php

class oop {	

	function simpan($con, $tabel, array $field, $redirect){
		$sql = "INSERT INTO $tabel SET ";

		foreach($field as $key =>$value){
			$sql.=" $key = '$value',";
		}
		$sql = rtrim($sql,',');
		$jalan = mysqli_query($con, $sql);

		if($jalan){
			// echo "<script>alert('Data berhasil disimpan');window.location.href='$redirect'</script>";
		}else{
			echo "<script>alert('Data gagal disimpan');window.location.href='$redirect'</script>";
			//echo 'FAILED'.mysqli_error($con);
		}
	}

	function tampil($con, $tabel){
		$sql = "SELECT * FROM $tabel";
		$jalan = mysqli_query($con, $sql);
		while($data = mysqli_fetch_assoc($jalan))
			$isi[] = $data;
		return @$isi;
	}

	function hapus($con, $tabel, $where, $redirect){
		$sql = "DELETE FROM $tabel WHERE $where";
		$jalan = mysqli_query($con, $sql);

		if($jalan){
			//echo "<script>alert('Data berhasil dihapus');window.location.href='$redirect'</script>";
			//echo "<script>window.location.href='$redirect'</script>";
		}else{
			//echo "<script>alert('Data gagal dihapus');window.location.href='$redirect'</script>";
			echo 'FAILED: '.mysqli_error($con);
		}
	}

	function edit($con, $tabel, $where){
		$sql = "SELECT * FROM $tabel WHERE $where";
		$jalan = mysqli_query($con, $sql);
		$tampung = mysqli_fetch_assoc($jalan);
		return $tampung;
	}

	function ubah($con, $tabel, array $field, $where, $redirect){
		$sql = "UPDATE $tabel SET ";
		foreach($field as $key =>$value){
			$sql.=" $key = '$value',";
		}
		$sql = rtrim($sql,',');
		$sql.=" WHERE $where";
		$jalan = mysqli_query($con, $sql);
		
		if($jalan){
			//echo "<script>alert('Data berhasil diubah');window.location.href='$redirect'</script>";
		}else{
			//echo "<script>alert('Data gagal diubah');window.location.href='$redirect'</script>";
			echo "FAILED: ".mysqli_error($con);
		}
	}
}

?>