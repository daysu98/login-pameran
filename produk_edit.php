<?php
$id      = $_GET['id'];
$tampil  = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
$data    = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
<h2 align="center">Form Ubah Data Produk</h2>
<form method="POST">
  <div class="form-group">
    <input type="hidden" name="id_produk" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Produk">
    <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Produk">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_produk" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Deskripsi Produk">
    <label for="exampleInputEmail1">Deskripsi Produk</label>
    <input type="text" name="deskripsi_produk" value="<?php echo $data['deskripsi_produk'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi Produk">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_produk" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Foto Produk">
    <label for="exampleInputEmail1">Foto Produk</label>
    <input type="file" name="foto_produk" value="<?php echo $data['foto_produk'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Produk">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_produk" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Tanggal Pembuatan">
    <label for="exampleInputEmail1">Tanggal Pembuatan</label>
    <input type="text" name="tgl_pembuatan" value="<?php echo $data['tgl_pembuatan'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pembuatan">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_produk" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Nama Siswa">
    <label for="exampleInputEmail1">Nama Siswa</label>
      <select name="id_siswa" class="form-control" id="exampleFormControlSelect1">
      <?php
        $tampil = mysqli_query($koneksi,"SELECT * FROM siswa");
        while ($data2=mysqli_fetch_Array($tampil)){
          if($data['id_siswa']==$data2['id_siswa']){
            echo'<option selected="selected" value="'.$data2['id_siswa'].'">'.$data2['nama_siswa'].'</option>';
          }else{
            echo'<option  value="'.$data2['id_siswa'].'">'.$data2['nama_siswa'].'</option>';
          }
        }
       ?>
      </select>
  </div>
  <div class="form-group">
    <input type="hidden" name="id_produk" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Nama Kategori">
    <label for="exampleInputEmail1">Nama Kategori</label>
      <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">
      <?php
        $tampil = mysqli_query($koneksi,"SELECT * FROM kategori");
        while ($data2=mysqli_fetch_Array($tampil)){
          if($data['id_kategori']==$data2['id_kategori']){
            echo'<option selected="selected" value="'.$data2['id_kategori'].'">'.$data2['nama_kategori'].'</option>';
          }else{
            echo'<option  value="'.$data2['id_kategori'].'">'.$data2['nama_kategori'].'</option>';
          }
        }
       ?>
          
      </select>
  </div>

  
    <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
    <a href="index.php?hal=produk" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['ubah'])){ //proses simpan perubahan data produk
      $id_produk   = $_POST['id_produk'];
      $nama_produk = $_POST['nama_produk'];
      $deskripsi_produk = $_POST['deskripsi_produk'];
      $foto_produk = $_POST['foto_produk'];
      $tgl_pembuatan = $_POST['tgl_pembuatan'];
      $id_siswa = $_POST['id_siswa'];
      $id_kategori = $_POST['id_kategori'];
     

      $ubah = mysqli_query($koneksi, 'UPDATE produk SET 
      
      nama_produk="'.$nama_produk.'",
      deskripsi_produk="'.$deskripsi_produk.'",
      foto_produk="'.$foto_produk.'",
      tgl_pembuatan="'.$tgl_pembuatan.'",
      id_siswa="'.$id_siswa.'",
      id_kategori="'.$id_kategori.'"
      WHERE id_produk="'.$id_produk.'"');
        if ($ubah){
        echo '
        <script>
        alert("Berhasil Mengubah Data Produk");
        window.location="index.php?hal=produk"; //menuju ke halaman Produk
        </script>
        ';
      }
    }
?>