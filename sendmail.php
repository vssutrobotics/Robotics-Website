<?php


//connection type
$con=mysqli_connect("localhost","wasbenzt","@Jd3*6^6?jMw","wasbenzt_vssutrobotics.in");


//Get values
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
 

$query = "INSERT INTO mail(name,mail,subject,message) VALUES ('$name','$email','$subject','$message')";
if(mysqli_query($con,$query))
{
     $_SESSION['Submit']= $name;
}
if(mail($name,$email, $subject, $message)){  
    echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..  
}
else{  
    echo 'failed';// ... or this one to tell it that it wasn't sent  
}  
mysqli_close($con);
?>