<?php
//prosedur menampilkan menu
function menu(){
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#index.php">App Pameran Siswa SMSR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=admin">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=jurusan">Jurusan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=kategori">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=produk">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=siswa">Siswa</a>
      </li>
      <li class="nav-item">
      <a <button type="button"  class="btn btn-info" href="index.php?hal=logout">Logout</button> </a>
      </li>
    </ul>
  </div>
</nav>
<?php
}

//procedure untuk menampilkan halaman beranda
function beranda(){
?>
  <div class="alert alert-light" role="alert">
       Selamat Datang di Pameran Karya Siswa SMKN 1 Sukawati<br>
       
       <hr>
       Pameran Karya Siswa SMSR 
       </div>
   <?php
}

//prosedur untuk menampilkan footer
function footer(){
?>
  <div class="alert alert-primary" role="alert" align="center">
      &copy SMK Negeri 1 Sukawati
    </div>
<?php
}
?>



