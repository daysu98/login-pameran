<div class="alert alert-light" role="alert">
<h2 align="center">Form Tambah Data Siswa</h2>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input type="text" name="nama_siswa" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Siswa">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="text" name="kelas" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nis</label>
    <input type="number" name="nis" required class="form-control" id="exampleInputPassword1" placeholder="Nis">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Foto Siswa</label>
    <input type="file" name="foto_siswa" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Siswa">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" name="alamat" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telp</label>
    <input type="number" name="telp" required class="form-control" id="exampleInputPassword1" placeholder="Telp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Angkatan</label>
    <input type="text" name="angkatan" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angkatan">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Nama Jurusan</label>
    <select name="id_jurusan" class="form-control" id="exampleFormControlSelect1">
    <?php 
    $tampil = mysqli_query($koneksi, "SELECT * FROM jurusan");
    while($data=mysqli_fetch_array($tampil))
    {
    ?>
    <option value="<?php echo $data['id_jurusan'] ?>"><?php echo $data['nama_jurusan'] ?></option>
    <?php } ?>
    </select>
    </div>

    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=siswa" class="btn btn-secondary">Batal</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['simpan'])){ //proses simpan data siswa
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

      $simpan = mysqli_query($koneksi, 'INSERT INTO siswa(nama_siswa,kelas,nis,jenis_kelamin,foto_siswa,tgl_lahir,alamat,telp,email,angkatan, id_jurusan) VALUES ("'.$nama_siswa.'","'.$kelas.'","'.$nis.'","'.$jenis_kelamin.'","'.$foto_siswa.'","'.$tgl_lahir.'","'.$alamat.'","'.$telp.'","'.$email.'","'.$angkatan.'","'.$id_jurusan.'")');
      if ($simpan){
        echo '
        <script>
        alert("Berhasil Menambah Data Siswa");
        window.location="index.php?hal=siswa"; //menuju ke halaman siswa
        </script>
        ';
      }
    }
?>