<?php
$connect = mysqli_connect("localhost","root","","payment");
if(isset($_POST['payment']))
 {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $cardnumber=$_POST['cardnumber'];
  $cvv=$_POST['cvv'];
  $year=$_POST['year'];
  $expmonth=$_POST['expmonth'];

  $query ="INSERT INTO payment (`name`, `email`, `cardnumber`, `cvv`, `year`, `expmonth`) VALUES ('$name', '$email', '$cardnumber', '$cvv', '$year', '$expmonth')";
  $result = mysqli_query($connect,$query);

if($result)
{
  
  echo"<script>alert('Transaction Successful') </script>";
  header("refresh:0.5;url=payment1.php");
}
else
{
  echo"<script>alert('Transaction Failed')</script>";


    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title> 
      Payment
   </title>
    <link rel="stylesheet" href="../css/payment2.css">
  </head>
  <body>
    <div class="container">
      <form method="post">
        
    
        <h1>PAYMENT</h1>
        <p></p>
        <hr />
        <tr>
          <td>
            <br>
        <label>Full name</label></td>
        <td><input type="text" name="name" placeholder="Enter Name" required/></td>
        </tr>
        <br />
        <tr>
        <tr>
          <td>
        <label>Email</label></td>
        <td><input type="text" name="email" placeholder="Enter Email" required/></td>
        </tr>
        <br />
        <tr>
          <td>
        <label>Card Number</label></td>
        <td><input type="text" name="cardnumber" placeholder="Enter Card Number" maxlength="12" required/></td>
        </tr>
        <br />
        <tr>
        <td>
        <label>CVV</label></td></br>
        <td><input type="text" name="cvv" placeholder="XXX" maxlength="3" required/></td>
        <br />
        <tr>
        <td>
        <label> Card Expiry MM/YYYY</label></td><br>
        <td><input type="month" name="year" placeholder="MM" required/></td></br>
        </tr>
       <tr>
      <td>
 <td>
   <a href="../pages/login.html">
     <div class="button"> 
   <input type="submit" name="payment"value="Pay"/>
</div>
    </a>
  </td>

        </tr>
        <div class="login">
        <a href="homepage1.html">Back</a>
      </form>
    </div>
</div>
</body>
</html>