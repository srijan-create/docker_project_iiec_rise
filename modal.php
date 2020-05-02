<?php
  $con=mysqli_connect("sqldb","srijan","2000","e_commerce") or die(mysqli_error($con));
  session_start();
  $email=$_POST['email'];
  $_SESSION['email']=$email;
  $sq1="SELECT email FROM registered_users WHERE registered_users.email='$email'";
  $sqr1=mysqli_query($con,$sq1) or die(mysqli_error($con));
  $tr1=mysqli_num_rows($sqr1);
  if($tr1==0)
  {
      $_SESSION['tr1']=$tr1;
      header('location: index.php');
  }
  else{
    $pass=$_POST['password'];

    $sq2="SELECT password FROM registered_users WHERE registered_users.email='$email' AND registered_users.password='$pass'";
   $sqr2=mysqli_query($con,$sq2) or die(mysqli_error($con));
    $tr2=mysqli_num_rows($sqr2);
    if($tr2==1)
    {
      header('location: home.php');
    }
    else{
         $_SESSION['tr2']=$tr2;
        header('location: index.php');
    }
  }

?>
