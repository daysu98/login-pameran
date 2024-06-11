<div class="alert alert-light" role="alert">
<h2 align="center">Form Tambah Data Jurusan</h2>
<form method="POST">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Jurusan</label>
    <input type="text" name="nama_jurusan" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Jurusan">
  </div>
  
    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=jurusan" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['simpan'])){ //proses simpan data jurusan
      $nama_jurusan = $_POST['nama_jurusan'];
     

      $simpan = mysqli_query($koneksi, 'INSERT INTO jurusan(nama_jurusan) VALUES ("'.$nama_jurusan.'")');
      if ($simpan){
        echo '
        <script>
        alert("Berhasil Menambah Data Jurusan");
        window.location="index.php?hal=jurusan"; //menuju ke halaman jurusan
        </script>
        ';
      }
    }
?>