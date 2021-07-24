<?php
if (isset($_POST['submit'])) {
  // code...
$name=$_POST['first-Sname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$text=$_POST['text2'];
//Please change this part of mail id with the college mail id
$to='saikunfu@gmail.com';
$subject='Form Submission';
$message="name : ".$name."\n"."email : ".$email."\n"."mobile number : ".$mobile."\n"."message : ".$text."\n";
$headers="From :".$email;

   if (mail($to,$subject,$subject,$headers)) {
    echo "<h1>Sent Successfully !!!>...Thankyou</h1>"." ".$name.","."We will Contact You Shortly!.";
   }
   else {
     echo "<h1> Couldn't send the mail</h1>";
   }

}
 ?>
