<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>WANT TO SHOP</title>
</head>
<body>


  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">E Store</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
         <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
       </ul>
    </div>

  </div>
  </nav>
  <div class="container">
    <div class="row">

      <div style="padding: 60px 400px 0px 400px">
  <form action="" method= "POST">
    <h3><b><u>CHANGE PASSWORD</u></b></h3><br><br>
    <input type="password" placeholder="Old Password" name="pass3" class="form-control"><br><br>
    <?php
    $flage=0;
    if(isset($_POST['Change']))
    {
      $pass3=$_POST['pass3'];
    $con=mysqli_connect("sqldb","srijan","2000","e_commerce") or die(mysqli_error($con));
    $sq="SELECT password FROM registered_users WHERE password='$pass3'";
    $sqr=mysqli_query($con,$sq) or die(mysqli_error($con));
    $tr=mysqli_num_rows($sqr);
    if($tr==0)
    {
    echo "Your old password is wrong"."<br><br>";
    }
    else{
      $flage=1;
    }
     }
     ?>
    <input type="text" placeholder="New Password" name="pass1" class="form-control"><br>
    <input type="text" placeholder="Retype New Password"  name="pass2" class="form-control"><br>
    <?php
  $flage1=0;
    if(isset($_POST['Change']))
    {
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
      if($pass1!=$pass2)
      {
        echo "Passwords don't match type again"."<br><br>";
      }
      else{
        $flage1=1;
      }
      if($flage=1 and $flage1=1)
      {
        $con=mysqli_connect("sqldb","srijan","2000","e_commerce") or die(mysqli_error($con));
        $sq="UPDATE registered_users SET password='$pass2' WHERE registered_users.password='$pass3'";
        $sqr=mysqli_query($con,$sq) or die(mysqli_error($con));
      }
      }
      ?>
    <input type="submit" value="Change" name="Change" class="btn btn-primary"><br><br>

  </form>

</div>

</div>
</div>

</body>
</html>
