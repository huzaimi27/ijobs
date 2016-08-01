<?php
    session_start();
    if(isset($_SESSION['level1'])){
      if ($_SESSION['level1'] =='admin')
      {
          //header('location: inputdata.php');
      }
      elseif ($_SESSION['level1'] =='perusahaan')
      {
          header('location: perusahaan/index.php'); 
      }
      else 
      {
          header('location: ../index.php');
      }  
    }
    else 
      {
          header('location: ../index.php');
      }  
    
?>