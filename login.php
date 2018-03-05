
<?php
include('session.php');
/* User login process, checks if user exists and password is correct */ 
 
      $myusername = $_POST['email1'];
      $mypassword =  $_POST['pass1'];

    //Connection Type
    $con=mysqli_connect("localhost","wasbenzt","@Jd3*6^6?jMw","wasbenzt_vssutrobotics.in");
    
   
      // username and password sent from form 
    //  $db = mysqli_select_db($con,"wasbenzt_vssutrobotics.in");
    // $myusername = mysqli_real_escape_string($myusername);
    // $mypassword = mysqli_real_escape_string($mypassword); 
      
 

      $sql = mysqli_query($con,"SELECT * FROM robotics1 WHERE email = '$myusername' and pass = '$mypassword'");
      
      $rows = mysqli_num_rows($sql);
     
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($rows == 1) {
         $user= $sql->fetch_assoc();
         $_SESSION['name']= $user['first']; 
          session_write_close();
         header("location: index1.php");
          exit;
          
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>

 