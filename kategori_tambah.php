<div class="alert alert-light" role="alert">
<h2 align="center">Form Tambah Data Kategori</h2>
<form method="POST">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input type="text" name="nama_kategori" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori">
  </div>
  
    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=kategori" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['simpan'])){ //proses simpan data kategori
      $nama_kategori = $_POST['nama_kategori'];
     

      $simpan = mysqli_query($koneksi, 'INSERT INTO kategori(nama_kategori) VALUES ("'.$nama_kategori.'")');
      if ($simpan){
        echo '
        <script>
        alert("Berhasil Menambah Data Kategori");
        window.location="index.php?hal=kategori"; //menuju ke halaman kategori
        </script>
        ';
      }
    }
?>