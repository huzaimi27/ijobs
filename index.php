<?php
  include "config/koneksi_db.php";
    session_start();
     if (isset($_SESSION['level1']))
    {
      if ($_SESSION['level1'] =='admin')
      {
          header('location: admin/index.php');
      }
    }
    else{
        //header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ijob Beta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>

    <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <form class="login__form" method="post">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="username" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="password" placeholder="Password"/>
        </div>
        <button type="submit" name="login" class="login__submit">Sign in</button>
        <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>
      </form>
    </div>
    
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <!-- <script src="js/index.js"></script> -->
  </body>
</html>
<?php
  if (isset($_POST['login'])){
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    if(!(empty($Username) or empty($Password))){
      $koneksi = mysqli_connect("localhost", "root", "", "anjamaki");
      $load= mysqli_query($koneksi, "SELECT * FROM `t_user` WHERE username='$Username' and password='$Password'");
      $data = mysqli_fetch_array($load);
            if(mysqli_num_rows($load)!=1){
                ?>
                  <script language=javascript>
                      window.alert ("Username tidak terdaftar silahkan klik daftar");
                  </script>
                <?php
                echo "<center>username dan password tidak terdaftar silahkan klik daftar<br>";
                die(mysqli_error());
            }
            //login berhasil
            else {
                $_SESSION['level1'] = $data['level'];
                $level = $data['level'];
                if ($level == 'admin') 
                {
                  $_SESSION['level1'] = $level;
                  $_SESSION['user'] = $Username;
                  header('location: admin/index.php');
                  //echo '<META HTTP-EQUIV="Refresh" Content="1; URL=../admin/index.php">';
                }
                if ($level == 'perusahaan') 
                {            
                  $_SESSION['level1'] = $level;
                  $_SESSION['user'] = $Username;
                  header('location: perusahaan/index.php');             
                }
                else{
                  ?>
                  <script language=javascript>
                      window.alert ("eror");
                  </script>
                <?php
                }              
                exit;              
            }
        }
        else{
          ?>
            <script language=javascript>
                window.alert ("Username tidak terdaftar silahkan klik daftar");
            </script>
            <?php

        }
  }
?>
