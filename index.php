<?php
session_start();
if(!isset($_SESSION['sesi']) && $_SESSION['sesi']!='admin'){
  header("location:login.php");
}else{
  ?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pameran LOGIN</title>
  </head>
  <body>
    <?php
    include("koneksi.php");  //memanggil file koneksi.php
    include ("function.php");  //memanggil file function.php
    menu();  //memanggil prosedur menu

    if(isset($_GET['cariadmin'])){
      include("admin.php");
     } else if(isset($_GET['carijurusan'])){
      include("jurusan.php");
     } else if(isset($_GET['carikategori'])){
      include("kategori.php");
     } else if(isset($_GET['cariproduk'])){
      include("produk.php");
     } else if(isset($_GET['carisiswa'])){
      include("siswa.php");
     } else if(isset($_GET['hal'])){
      $hal=$_GET['hal'];

      if($hal=='admin'){
        include("admin.php");
      }else if($hal=='admintambah'){
        include("admin_tambah.php");
      }else if($hal=='adminedit'){
        include("admin_edit.php");
      }else if($hal=='adminhapus'){
        include("admin_hapus.php");  

      }else if($hal=='jurusan'){
        include("jurusan.php");
      }else if($hal=='jurusantambah'){  
        include("jurusan_tambah.php");
      }else if($hal=='jurusanedit'){
        include("jurusan_edit.php"); 
      }else if($hal=='jurusanhapus'){
        include("jurusan_hapus.php"); 

      }else if($hal=='kategori'){
        include("kategori.php");
      }else if($hal=='kategoritambah'){  
        include("kategori_tambah.php");
      }else if($hal=='kategoriedit'){
        include("kategori_edit.php"); 
      }else if($hal=='kategorihapus'){
        include("kategori_hapus.php"); 

      }else if($hal=='produk'){
        include("produk.php");
      }else if($hal=='produktambah'){  
        include("produk_tambah.php");
      }else if($hal=='produkedit'){
        include("produk_edit.php"); 
      }else if($hal=='produkhapus'){
        include("produk_hapus.php"); 

      }else if($hal=='siswa'){
        include("siswa.php");
      }else if($hal=='siswatambah'){  
        include("siswa_tambah.php");
      }else if($hal=='siswaedit'){
        include("siswa_edit.php"); 
      }else if($hal=='siswahapus'){
        include("siswa_hapus.php"); 
      }else if($hal=='logout'){
        include("logout.php"); 
      

      }
    }else{
      beranda();  //memanggil prosedur beranda
    }
    
    footer();  //mamanggil prosedur footer
  ?>        

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php }?>