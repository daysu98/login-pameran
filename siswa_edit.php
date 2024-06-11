<?php
$id      = $_GET['id'];
$tampil  = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
$data    = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
<h2 align="center">Form Ubah Data Siswa</h2>
<form method="POST">
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama siswa">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Siswa">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Kelas">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Nis">
    <label for="exampleInputEmail1">Nis</label>
    <input type="text" name="nis" value="<?php echo $data['nis'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nis">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Jenis Kelamin">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Foto Siswa">
    <label for="exampleInputEmail1">Foto Siswa</label>
    <input type="file" name="foto_siswa" value="<?php echo $data['foto_siswa'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Siswa">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Alamat">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
  </div>
  <div class="form-group">
  <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Telepon">
    <label for="exampleInputPassword1">Telp</label>
    <input type="number" name="telp" value="<?php echo $data['telp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Telepon">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Email">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" value="<?php echo $data['email'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Angkatan">
    <label for="exampleInputEmail1">Angkatan</label>
    <input type="text" name="angkatan" value="<?php echo $data['angkatan'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angkatan">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_siswa" value="<?php echo $id ?>" required class="form-control" id="exampleImputEmail" aria-describedby="emailHelp" placeholder="Jurusan">
    <label for="exampleInputEmail1">Nama Jurusan</label>
      <select name="id_jurusan" class="form-control" id="exampleFormControlSelect1">
      <?php
        $tampil = mysqli_query($koneksi,"SELECT * FROM jurusan");
        while ($data2=mysqli_fetch_Array($tampil)){
          if($data['id_jurusan']==$data2['id_jurusan']){
            echo'<option selected="selected" value="'.$data2['id_jurusan'].'">'.$data2['nama_jurusan'].'</option>';
          }else{
            echo'<option  value="'.$data2['id_jurusan'].'">'.$data2['nama_jurusan'].'</option>';
          }
        }
       ?>
      </select>
  </div>
  
    <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
    <a href="index.php?hal=siswa" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['ubah'])){ //proses simpan perubahan data siswa
      $id_siswa   = $_POST['id_siswa'];
      $nama_siswa = $_POST['nama_siswa'];
      $kelas = $_POST['kelas'];
      $nis = $_POST['nis'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $foto_siswa = $_POST['foto_siswa'];
      $tgl_lahir = $_POST['tgl_lahir'];
      $alamat = $_POST['alamat'];
      $telp = $_POST['telp'];
      $email = $_POST['email'];
      $angkatan = $_POST['angkatan'];
      $id_jurusan = $_POST['id_jurusan'];
     

      $ubah = mysqli_query($koneksi, 'UPDATE siswa SET 
      nama_siswa="'.$nama_siswa.'",
      kelas="'.$kelas.'",
      nis="'.$nis.'",
      jenis_kelamin="'.$jenis_kelamin.'",
      foto_siswa="'.$foto_siswa.'",
      tgl_lahir="'.$tgl_lahir.'",
      alamat="'.$alamat.'",
      telp="'.$telp.'",
      email="'.$email.'",
      angkatan="'.$angkatan.'",
      id_jurusan="'.$id_jurusan.'" 
      WHERE id_siswa="'.$id_siswa.'"');
        if ($ubah){
        echo '
        <script>
        alert("Berhasil Mengubah Data Siswa");
        window.location="index.php?hal=siswa"; //menuju ke halaman siswa
        </script>
        ';
      }
    }
?>