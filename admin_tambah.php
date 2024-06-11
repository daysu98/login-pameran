<div class="alert alert-light" role="alert">
<h2 align="center">Form Tambah Data Admin</h2>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Admin</label>
    <input type="text" name="nama_admin" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Admin">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" name="alamat" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telp</label>
    <input type="number" name="telp" required class="form-control" id="exampleInputPassword1" placeholder="Telp">
  </div>

    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=admin" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['simpan'])){ //proses simpan data admin
      $nama_admin = $_POST['nama_admin'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $alamat = $_POST['alamat'];
      $telp = $_POST['telp'];

      $simpan = mysqli_query($koneksi, 'INSERT INTO admin(nama_admin,email,password,alamat,telp) VALUES ("'.$nama_admin.'","'.$email.'","'.$password.'","'.$alamat.'","'.$telp.'")');
      if ($simpan){
        echo '
        <script>
        alert("Berhasil Menambah Data Admin");
        window.location="index.php?hal=admin"; //menuju ke halaman admin
        </script>
        ';
      }
    }
?>