


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
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="aboutus.php"><span class="glyphicon glyphicon-list-alt"></span>About Us</a></li>
         <li><a href="contact.php"><span class="	glyphicon glyphicon-phone"></span>Contact Us</a></li>
       </ul>
    </div>

  </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-6" style="padding: 0px 80px 0px 80px;">
        <img src="s.PNG" alt="">
        </div>
        <div class="col-sm-6" style="padding: 0px 0px 0px 250px;">
          <form method="POST" action="">
              <h1><b>SIGN-UP</b></h1><br><br>
             <input type="text" name="name" placeholder="Name" required="true"><br><br>
            <input type="email" name="email" placeholder="Email" required="true"><br><br>
            <?php
            if(isset($_POST['submit']))
            {
                $flage=0;
                $con1=mysqli_connect("mysql","root","eFb31Zfsd","e_commerce") or die(mysqli_error($con1));
                $email=$_POST['email'];
                $sq="SELECT email FROM registered_users WHERE email='$email'";
                $sqr=mysqli_query($con1,$sq) or die(mysqli_error($con1));
                $rwf=mysqli_num_rows($sqr);
                if($rwf>=1){
                  $flage=1;
                  echo "Email id is already registered"."<br><br>";
                }
              }
             ?>
            <input type="password" name="password" placeholder="Password" class="form control" name="password" required="true" ><br><br>
            <?php
            $flagp=0;
            $flagc=0;
            if(isset($_POST['submit']))
            {


              if(strlen($_POST['password'])<6){
                $flagp=1;
                echo "*Password should be atleast of 6 characters"."<br><br>";

              }

            }
            ?>
            <input type="text" name="contact" placeholder="Contact" name="contact" required="true"><br><br>
            <?php
            if(isset($_POST['submit']))
            {


              if(strlen($_POST['contact'])<10 or strlen($_POST['contact'])>10){
                $flagc=1;
                echo "*Incorrect phone number"."<br><br>";

              }

            }
            ?>
           <input type="text" name="city" placeholder="City" required="true"><br><br>
          <input type="text" name="address" placeholder="Address" required="true"><br><br>
            <input type="submit" value="submit" class="btn btn-primary" class="form-control" name="submit"><br><br>
            <?php
            if(isset($_POST['submit']) and $flagp!=1 and $flagc!=1 and $flage!=1)
            {
            $con=mysqli_connect("mysql","root","eFb31Zfsd","e_commerce") or die(mysqli_error($con));
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $contact=$_POST['contact'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $urq="insert into registered_users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')" or die($urq);
            $urs=mysqli_query($con,$urq) or die(mysqli_error($con));
            echo "USER SUCCESFULLY SIGNED IN";
            header('location: home.php');
            }
           ?>
          </form>

          </div>
      </div>
    </div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-footer">
        <div class="nav navbar-nav navbar-left" style="padding: 0px 400px 0px 0px;">
          <ul type="none">
          <li><h3><b>Information</b></h3></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <ul>
        </div>
        <div class="nav navbar-nav">

          <ul type="none">
            <li><h3><b>My Account</b></h3></li>
              <li><a href="#">Login</a></li>
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
