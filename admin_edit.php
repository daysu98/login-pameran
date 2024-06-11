<?php
$id      = $_GET['id'];
$tampil  = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin='$id'");
$data    = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
<h2 align="center">Form Ubah Data Admin</h2>
<form method="POST">
  <div class="form-group">
    <input type="hidden" name="id_admin" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Admin">
    <label for="exampleInputEmail1">Nama Admin</label>
    <input type="text" name="nama_admin" value="<?php echo $data['nama_admin'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Admin">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_admin" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" value="<?php echo $data['email'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_admin" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Masukkan Password">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" name="password" value="<?php echo $data['password'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Password">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_admin" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Masukkan Alamat">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telp</label>
    <input type="number" name="telp" value="<?php echo $data['telp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

    <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
    <a href="index.php?hal=admin" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['ubah'])){ //proses simpan perubahan data admin
      $id_admin   = $_POST['id_admin'];
      $nama_admin = $_POST['nama_admin'];
      $email      = $_POST['email'];
      $password   = md5($_POST['password']);
      $alamat     = $_POST['alamat'];
      $telp       = $_POST['telp'];

      $ubah = mysqli_query($koneksi, 'UPDATE admin SET nama_admin="'.$nama_admin.'",email="'.$email.'",password="'.$password.'",alamat="'.$alamat.'",telp="'.$telp.'" WHERE id_admin="'.$id_admin.'"');
        if ($ubah){
        echo '
        <script>
        alert("Berhasil Mengubah Data Admin");
        window.location="index.php?hal=admin"; //menuju ke halaman admin
        </script>
        ';
      }
    }
?>