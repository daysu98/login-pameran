<h2 align="center">Data Produk</h2>

<form action="index.php?hal=produk" method="get">
<div class="form-row align-items-center">
  <div class="col-sm-3 my-1">
   <label class="sr-only" for="inlineFormInputName">Name</label>
   <input type="text" name="cariproduk" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Produk">
  </div>
  <div class="col-auto my-1">
    <button type="submit" class="btn btn-success">Cari Produk</button>
  </div>
  <div class="col-sm-3 my-1">
    <a href="index.php?hal=produktambah" class="btn btn-primary">Tambah Produk</a>
  </div>
  </div>
  </form>

  <?php
      if(isset($_GET['cariproduk'])){
      $cari = $_GET['cariproduk'];
      echo "<b>Hasil pencarian : ".$cari."</b>";
  }
  ?>

  <table class="table">
   <thead>
    <tr>
      <th scope="col">ID Produk</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Deskripsi Produk</th>
      <th scope="col">Foto Produk</th>
      <th scope="col">Tanggal Pembuatan</th>
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
      <th scope="col">Aksi</th>
    </tr>
   </thead>
   <?php
     if(isset($_GET['cariproduk'])){
     	$cari = $_GET['cariproduk'];
     	$tampil = mysqli_query($koneksi,"SELECT * FROM viewproduk WHERE nama_produk like '%".$cari."%' ORDER BY id_produk DESC");
     }else{
     	$tampil = mysqli_query($koneksi,"SELECT * FROM viewproduk ORDER BY id_produk DESC");
     }
     while ($data = mysqli_fetch_array($tampil)){
   ?>
   <tbody>
     <tr>
       <th scope="row"><?php echo $data['id_produk']; ?></th>
       <td><?php echo $data['nama_produk']; ?></td>
       <td><?php echo $data['deskripsi_produk']; ?></td>
       <td><?php echo $data['foto_produk']; ?></td>
       <td><?php echo $data['tgl_pembuatan']; ?></td>
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
       <td>
         <?php
         echo'
           <a href="index.php?hal=produkedit&id='.$data['id_produk'].'" class="btn btn-warning">Edit</a>
           <a href="index.php?hal=produkhapus&id='.$data['id_produk'].'" class="btn btn-danger">Hapus</a>
           ';?>
           </td>
           </tr>
           </tbody>
           <?php
             }
             ?>
             </table>
