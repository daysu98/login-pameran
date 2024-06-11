<?php 
    include("koneksi.php");
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing up  Form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="nama_admin"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_admin" id="nama_admin" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Your Address"/>
                            </div>
                            <div class="form-group">
                                <label for="telp"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="number" name="telp" id="telp" placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php 
      if(isset($_POST['signup'])){ //proses simpan data admin
      $nama_admin = $_POST['nama_admin'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $alamat = $_POST['alamat'];
      $telp = $_POST['telp'];

      $signup = mysqli_query($koneksi, 'INSERT INTO admin(nama_admin,email,password,alamat,telp) VALUES ("'.$nama_admin.'","'.$email.'","'.$password.'","'.$alamat.'","'.$telp.'")');
      if ($signup){
        echo '
        <script>
        alert("Berhasil Menambah Data Admin");
        window.location="index.php?hal=admin"; //menuju ke halaman admin
        </script>
        ';
    }
}
?>
 


<script src="vendor/jquery/jquery.main.js"></script>
<script src="js/main.js"></script>
    
</body>
</html>