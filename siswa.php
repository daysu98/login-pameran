<h2 align="center">Data Siswa</h2>

<form action="index.php?hal=siswa" method="get">
<div class="form-row align-items-center">
  <div class="col-sm-3 my-1">
   <label class="sr-only" for="inlineFormInputName">Name</label>
   <input type="text" name="carisiswa" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Siswa">
  </div>
  <div class="col-auto my-1">
    <button type="submit" class="btn btn-success">Cari Siswa</button>
  </div>
  <div class="col-sm-3 my-1">
    <a href="index.php?hal=siswatambah" class="btn btn-primary">Tambah Siswa</a>
  </div>
  </div>
  </form>

  <?php
      if(isset($_GET['carisiswa'])){
      $cari = $_GET['carisiswa'];
      echo "<b>Hasil pencarian : ".$cari."</b>";
  }
  ?>

  <table class="table">
   <thead>
    <tr>
      <th scope="col">ID Siswa</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nis</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Foto Siswa</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telp</th>
      <th scope="col">Email</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
   </thead>
   <?php
     if(isset($_GET['carisiswa'])){
     	$cari = $_GET['carisiswa'];
     	$tampil = mysqli_query($koneksi,"SELECT * FROM viewsiswa WHERE nama_siswa like '%".$cari."%' ORDER BY id_siswa DESC");
     }else{
     	$tampil = mysqli_query($koneksi,"SELECT * FROM viewsiswa ORDER BY id_siswa DESC");
     }
     while ($data = mysqli_fetch_array($tampil)){
   ?>
   <tbody>
     <tr>
       <th scope="row"><?php echo $data['id_siswa']; ?></th>
       <td><?php echo $data['nama_siswa']; ?></td>
       <td><?php echo $data['kelas']; ?></td>
       <td><?php echo $data['nis']; ?></td>
       <td><?php echo $data['jenis_kelamin']; ?></td>
       <td><?php echo $data['foto_siswa']; ?></td>
       <td><?php echo $data['tgl_lahir']; ?></td>
       <td><?php echo $data['alamat']; ?></td>
       <td><?php echo $data['telp']; ?></td>
       <td><?php echo $data['email']; ?></td>
       <td><?php echo $data['angkatan']; ?></td>
       <td><?php echo $data['nama_jurusan']; ?></td>
       <td>
         <?php
         echo'
           <a href="index.php?hal=siswaedit&id='.$data['id_siswa'].'" class="btn btn-warning">Edit</a>
           <a href="index.php?hal=siswahapus&id='.$data['id_siswa'].'" class="btn btn-danger">Hapus</a>
           ';?>
           </td>
           </tr>
           </tbody>
           <?php
             }
             ?>
             </table>
