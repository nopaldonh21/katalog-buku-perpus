<?php

$go = new oop();

    $tabel = 'tb_buku';  
    $field = array(
        'nama_guru' => @$_POST['nama_guru'],
        'kode_buku' => @$_POST['kode_buku'],
        'judul' => @$_POST['judul'],				
        'pengarang' => @$_POST['pengarang']);
    @$where = "id_buku = $_GET[id]";
    $redirect = "?page=buku&menu=daftarBuku";
    @$aksi = $_GET['act'];

    if(@$_GET['act']=='edit'){
        $go->ubah($con, $tabel, $field, $where, $redirect);
        header('location:index.php'.$redirect);
        exit;
    }
    elseif (@$_GET['act'] == 'delete'){
        $go->hapus($con, $tabel, $where, $redirect);
        header('location:index.php'.$redirect);
        exit;
    }

?>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col" width="50">#</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Kode Buku</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
            <th scope="col" width="130">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $a = $go->tampil($con, $tabel);
        $no = 0;    
        
        if($a == ""){
        echo "<tr> <th scope='row' colspan='4' align='center'>No Record</th> </tr>";
        }else{
        foreach($a as $r){
            $no++;
    ?>
        <tr>
            <td scope="row"><?php echo $no ?></td>
            <td scope="row"><?php echo $r['nama_guru'] ?></td>
            <td scope="row"><?php echo $r['kode_buku'] ?></td>
            <td scope="row"><?php echo $r['judul'] ?></td>
            <td scope="row"><?php echo $r['pengarang'] ?></td>        
            <td>
                <!-- Button Trigger Modal Delete -->
                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteData<?php echo $r['id_buku']; ?>">Delete</a>
                <!-- Button Trigger Modal Edit -->
                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editData<?php echo $r['id_buku']; ?>">Edit</a>

                <!-- Modal Delete -->
                <div class="modal fade" id="deleteData<?php echo $r['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Buku</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6 align="center" >Apakah anda yakin ingin menghapus buku <?php echo $r['judul'];?> ?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="<?php echo $redirect; ?>&act=delete&id=<?php echo $r['id_buku']; ?>" class="btn btn-primary">Delete</a>
                        </div>
                        </div>
                    </div>
                </div> <!-- Modal Delete End -->

                <!-- Modal Edit -->
                <div class="modal fade" id="editData<?php echo $r['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo $redirect; ?>&act=edit&id=<?php echo $r['id_buku']; ?>" method="post">
                            <div class="mb-3">
                                <label for="inputNamaGuru" class="col-form-label">Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru" id="nama_guru" value="<?php echo $r['nama_guru']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="inputKodeBuku" class="col-form-label">Kode Buku</label>
                                <input type="text" class="form-control" name="kode_buku" id="kode_buku" value="<?php echo $r['kode_buku']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="inputJudul" class="col-form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $r['judul']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="inputPengarang" class="col-form-label">Pengarang</label>
                                <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?php echo $r['pengarang']; ?>">
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" name="edit" class="btn btn-primary" value="Update">                
                        </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- Modal Edit End -->

            </td>
        </tr>
        <?php } } ?>
    </tbody>
</table>