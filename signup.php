<?php

include('session.php');
//connection type
$con=mysqli_connect("localhost","wasbenzt","@Jd3*6^6?jMw","wasbenzt_vssutrobotics.in");


//Get values
 $name1=$_POST['f_name'];
 $name2=$_POST['l_name'];
 $choice=$_POST['choice'];
 $email=$_POST['e_mail'];
 $pass=$_POST['pass'];

$query = "INSERT INTO robotics1(first,last,choice,email,pass) VALUES ('$name1','$name2','$choice','$email','$pass')";
if(mysqli_query($con,$query))
{
     $_SESSION['name']= $name1;
    if(!empty($_SESSION['name']))
    {
echo '<script language="javascript">';
   
echo 'alert("You have been successfully registered");';
 
echo 'window.location.href="index1.php";';
echo '</script>'; 
    }
}



mysqli_close($con);
?>