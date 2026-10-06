<?php
$connect = mysqli_connect("localhost","root","","booking");
if(isset($_POST['booking']))
 {
  $name=$_POST['name'];
  
  $location=$_POST['location'];
  $duration=$_POST['duration'];
  
  $phonenumber=$_POST['phonenumber'];
  $date=$_POST['date'];

  $query ="INSERT INTO booking (name, location, duration, phonenumber, date) VALUES ('$name','$location','$duration','$phonenumber','$date')";
$result = mysqli_query($connect,$query);

if($result)
{
  
  echo"<script>alert('You Have Successfully Booked Your Table Tennis Table') </script>";
  header("refresh:0.5;url=payment1.php");
}
else
{
  echo"<script>alert('Failed To Book Table')</script>";


    }
}
?>
<!DOCTYPE html>
<html>
  <title>
    BOOKINGS
    </title>
  <head>
    <link rel="stylesheet" href="../css/bookings.css">
  </head>
  <body>
    <div class="container">
      <form method="post">
        
    
        <h1>BOOKING</h1>
        <p></p>
        <hr />
        <br>
        <tr>
          <td>
        <label>Name</label></td>
        <td><input type="text" name="name" placeholder="Enter Name"/></td>
        </tr>
        <br />
        <tr>
        
          <td>
        <label>Venue</label></td>
        <td><input type="text" name="location" placeholder="Enter  Venue"/></td>
        </tr>
        <br />
        <tr>
        <td>
          <label>Email</label></td>
        <td><input type="email" name="duration" placeholder="Enter Email" /></td>
        <br />
        <tr>
        
          <td>
        <label> Table Booking Price</label></td>
        <td><input type="text" name="phonenumber" placeholder="Enter Number" value="100"/></td>
        </tr>
        <br />
        
        <tr>
          <td>
        <label>Date and Time</label></td><br>
        <td><input type="text" name="date" placeholder="Enter Date & Time" /></td>
        </tr>
        <br/>

       
        
      <tr>
      <td>
        <br>
 <td>
   <a href="payment1.php">
   <div class="button">
   <input type="submit"  name="booking"value="Book"/>
</div>
    </a>
  </td>

        </tr>
        <div class="login">
        <a href="BookTable1.html">Cancel</a>
      </form>
    </div>
</div>
  </body>
</html>