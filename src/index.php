
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
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="aboutus.php"><span class="glyphicon glyphicon-list-alt"></span>About Us</a></li>
         <li><a href="contact.php"><span class="	glyphicon glyphicon-phone"></span>Contact Us</a></li>
       </ul>
    </div>
  </div>
  </nav>

    <form action="modal.php" method="POST">
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
        <p>Don't have an account?<a href="signup.php">Regsiter</a></p><br>
        <input type="text" placeholder="Email" name="email" class="form-control"><br>
        <input type="password" placeholder="Password" name="password" class="form-control"><br>
        <input type="submit" name="Login" value="Login" class="btn btn-primary"><br>
      </div>
      <div class="modal-footer">
        <a href="setting.php">Reset Password</a>
      </div>
    </div>

  </div>
</div>

</form>







<div class="container-fluid">
  <div class="row">
    <a href="#"><div class="col-sm-4" style="padding: 10px 10px 10px 30px;">
        <b><p>BLUE R1 HD</p></b>
      <img src="m1.PNG" alt="Responsive image">
      <p>The BLU R1 HD has a 5.0 HD curved display and a scratch resistant Corning Gorilla Glass 3. The MediaTek 6735 1.3GHz Quad-Core processor is works seamlessly with two varieties; One sporting 8GB of internal memory to store your movies, music, and pictures coupled with 1GB RAM</p>
      <input type="submit" value="ORDER NOW!" class="btn btn-primary">
    </div></a>
    <a href="#"><div class="col-sm-4" style="padding: 10px 10px 10px 50px;">
    <b><p>BOLD N1</p></b>
      <img src="m21.PNG" alt="Responsive image">
      <p>BLU Bold N1 Android smartphone. Announced Sep 2019. Features 6.4″ AMOLED display, MT6771V Helio P70 chipset, 3500 mAh battery, 128 GB storage</p>
      <input type="submit" value="ORDER NOW!" class="btn btn-primary">
    </div></a>
    <a href="#"><div class="col-sm-4" style="padding: 10px 10px 10px 60px;">
      <b><p>Apple iphone x</p></b>
      <img src="m3.PNG" alt="Responsive image">
      <p>5.8-inch Super Retina display (OLED) with HDR; IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes); 12MP dual cameras with dual OIS</p>
      <input type="submit" value="ORDER NOW!" class="btn btn-primary">
    </div></a>
  </div>
  <div class="row">
    <a href="#"><div class="col-sm-4" style="padding: 10px 10px 10px 30px;">
      <b><p>UI phones</p></b>
      <img src="m4.PNG" alt="Responsive image">
      <p>ui phones Super Power 1.1 3000mAh Battery Dual SIM Mobile Phone with FM and Camera (Black and Grey)</p>
      <input type="submit" value="ORDER NOW!" class="btn btn-primary">
    </div></a>
    <a href="#"><div class="col-sm-4" style="padding: 20px 10px 10px 50px;">
        <b><p>Samsung GALAXY Fold</p></b>
        <br>
        <br>
      <img src="m5.PNG" alt="Responsive image">
      <p> The phone comes with a 7.30-inch touchscreen primary display with a resolution of 1536x2152 pixels at a pixel density of 326 pixels per inch (ppi).</p>
      <input type="submit" value="ORDER NOW!" class="btn btn-primary">
    </div></a>
    <a href="#"><div class="col-sm-4" style="padding: 10px 10px 10px 60px;">
        <b><p>Apple iphone7</p></b>
      <img src="m6.PNG" alt="Responsive image">
      <p>4.7-inch Retina HD display; IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes); 12MP camera and 4K video; 7MP FaceTime HD camera</p>
      <input type="submit" value="ORDER NOW!" class="btn btn-primary">
    </div></a>
  </div>
</div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-footer">
        <div class="nav navbar-nav navbar-left" style="padding: 0px 400px 0px 0px;">
          <ul type="none">
          <li><h3><b>Information</b></h3></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <ul>
        </div>
        <div class="nav navbar-nav">

          <ul type="none">
            <li><h3><b>My Account</b></h3></li>
              <li><a href="#"  data-toggle="modal" data-target="#myModal">Login</a></li>
              <li><a href="signup.php">Sign up</a></li>
              <ul>

        </div>
        <div class="nav navbar-nav navbar-right">
          <ul type="none">
          <li><h3><b>Contact Us</b></h3></li>
          <li>Contact +8601574027</li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
</body>
</html>
<?php
session_start();

   if(isset($_SESSION['tr1']))
      if($_SESSION['tr1']==0){
      ?>
          <script>
            alert('YOU ARE NOT A REGISTERED USER');
          </script>
<?php
}
    if(isset($_SESSION['tr2']))
      if($_SESSION['tr2']!=1){
      ?>
        <script>
          alert('INCORRECT PASSWORD');
        </script>
<?php
}
        session_destroy();
 ?>
