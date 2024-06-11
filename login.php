<?php 
session_start();
if (isset($_SESSION['sesi']) && $_SESSION['sesi']=='admin'){
    header("location:index.php");
}else{
    include("koneksi.php");
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create as new admin</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="your_email" id="your_name" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

<?php
if (isset($_POST['signin'])){ 
    $email = $_POST['your_email'];
    $password = $_POST['your_pass'];

    $login = mysqli_query($koneksi,"SELECT * FROM admin WHERE email='".$email."' AND password='".$password."' LIMIT 1");
    $data = mysqli_fetch_array($login);

if($login->num_rows > 0){
$_SESSION['sesi']='admin';
$_SESSION['id_admin']=$data['id_admin'];
echo '
    <script>
        alert("Anda Berhasil Login dan Menuju Ke Halaman Admin");
        window.location = "index.php";
    </script>
';
}  else {
    echo '
        <script>
            alert("Maaf Email atau Password tidak sesuai!");
            window.location = "index.php";
        </script>
        ';
}
}
?>

<script src="vendor/jquery/jquery.main.js"></script>
<script src="js/main.js"></script>
    
</body>
</html>
<?php }?>