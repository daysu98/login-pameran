<?php
$id      = $_GET['id'];
$tampil  = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
$data    = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
<h2 align="center">Hapus Data Siswa</h2>
<form method="POST">
  <div class="form-group">
  <div class="alert alert-danger" role="alert">
  <h6>Yakin Akan Menghapus Data Siswa <b><?php echo $data['nama_siswa'] ?></b> ?</h6>
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control">
    <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
    <a href="index.php?hal=siswa" class="btn btn-secondary">Batal</a>
  </div>
  </div>
    </form>
    </div>

    <?php 
    if(isset($_POST['hapus'])){ //proses hapus data siswa
      $id_siswa  = $_POST['id_siswa'];
     
      $ubah = mysqli_query($koneksi, 'DELETE FROM siswa WHERE id_siswa="'.$id_siswa.'"');
        if ($ubah){
        echo '
        <script>
        alert("Berhasil Menghapus Data Siswa");
        window.location="index.php?hal=siswa"; //menuju ke halaman siswa
        </script>
        ';
      }
    }
?>