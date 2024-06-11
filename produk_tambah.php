<div class="alert alert-light" role="alert">
<h2 align="center">Form Tambah Data Produk</h2>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" name="nama_produk" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Produk">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Deskripsi Produk</label>
    <input type="text" name="deskripsi_produk" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi Produk">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Foto Produk</label>
    <input type="file" name="foto_produk" required class="form-control" id="exampleInputPassword1" placeholder="Foto Produk">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pembuatan</label>
    <input type="date" name="tgl_pembuatan" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pembuatan">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nama Siswa</label>
    <select name="id_siswa" class="form-control" id="exampleFormControlSelect1">
    <?php 
    $tampil = mysqli_query($koneksi, "SELECT * FROM siswa");
    while($data=mysqli_fetch_array($tampil))
    {
    ?>
    <option value="<?php echo $data['id_siswa'] ?>"><?php echo $data['nama_siswa'] ?></option>
    <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nama Kategori</label>
    <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">
    <?php 
    $tampil = mysqli_query($koneksi, "SELECT * FROM kategori");
    while($data=mysqli_fetch_array($tampil))
    {
    ?>
    <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
    <?php } ?>
    </select>
    </div>

    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=produk" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['simpan'])){ //proses simpan data produk
      $nama_produk = $_POST['nama_produk'];
      $deskripsi_produk = $_POST['deskripsi_produk'];
      $foto_produk = $_POST['foto_produk'];
      $tgl_pembuatan = $_POST['tgl_pembuatan'];
      $id_siswa = $_POST['id_siswa'];
      $id_kategori = $_POST['id_kategori'];
      

      $simpan = mysqli_query($koneksi, 'INSERT INTO produk(nama_produk,deskripsi_produk,foto_produk,tgl_pembuatan,id_siswa,id_kategori) 
      VALUES ("'.$nama_produk.'","'.$deskripsi_produk.'","'.$foto_produk.'","'.$tgl_pembuatan.'","'.$id_siswa.'","'.$id_kategori.'")');
      if ($simpan){
        echo '
        <script>
        alert("Berhasil Menambah Data Produk");
        window.location="index.php?hal=produk"; //menuju ke halaman produk
        </script>
        ';
      }
    }
?>