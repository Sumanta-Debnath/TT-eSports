<?php
error_reporting(0);
$connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['register']))
 {
  $fname=$_POST['fname'];
  $sname=$_POST['sname'];
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $phonenumber=$_POST['phonenumber'];
  $pass=$_POST['pass'];

$query ="INSERT INTO users (fname, sname,uname, email, gender, phonenumber, pass) VALUES ('$fname','$sname','$uname','$email','$gender','$phonenumber','$pass')";


$result = mysqli_query($connect,$query);


if($result)
{
  
  echo"<script>alert('You Have Successfully Registered') </script>";
  header("refresh:0.5;url=BookTable1.html");
}
else
{
  echo"<script>alert('successful')</script>";
  header("refresh:0.5;url=BookTable1.html");

    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      REGISTRATION
    </title>
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>
    <img src="../images/branding/logo1.png" class="logo" />
    <div class="container">
      <form method="post">
        <h1>REGISTRATION</h1>
        <h4>Please fill this form to create an account</h4>
        <hr />
        <tr>
          <td>
        <label>First name</label></td>
        <td><input type="text" name="fname" placeholder="Enter Firstname" required/></td>
        </tr>
        <br />
        <tr>
          <td>
        <label>Last name</label></td>
        <td><input type="text" name="sname" placeholder="Enter Lastname" required/></td>
        </tr>
        <br />
        <tr>
          <td>
        <label>Username</label></td>
        <td><input type="text" name="uname" placeholder="Enter  Username" required/></td>
        </tr>
        <br />
        <tr>
        <td>
          <label>Email</label></td>
        <td><input type="email" name="email" placeholder="Enter Email" required/></td>
        <br />
        <tr>
          <td>
            <label>Gender</label></td>
            <td><input type="radio" name="gender"value="male">Male
              <input type="radio" name="gender" value="female">Female</td>
          </td>
        </tr>
        <br>
        <br />
        <tr>
          <td>
        <label>Contact Number</label></td>
        <td><input type="text" name="phonenumber" placeholder="Enter Contact Number" required/></td>
        </tr>
        <br />
        
        <tr>
          <td>
        <label>Password</label></td>
        <td><input type="password" name="pass" placeholder="Enter password" required/></td>
        </tr>
        <br/>
        <tr>
      <td>
        <br>
        <a>
          <div class="button">
            <a href="../pages/homepage.html">
            <input type="submit" value="Register">
            </a>
            </div>

        </tr>
        <div class="login">
        <p>Already have an account? <a href="login4.html">Login</a></p>
      </form>
    </div>
</div>
  </body>
</html>