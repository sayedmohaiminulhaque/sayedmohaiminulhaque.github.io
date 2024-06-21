<?php
if(!empty($_POST['submit']))
{
    $name=$_POST['name'];
$email=$_POST['email'];
$msg=&$_POST['msg'];

$to="mohaiminul.shu.cse@gmail.com";
$mailheader = "Name: ". $name . "Email: " . $email;
}

if(mail($to, $mailheader, "Message From Portfolio", $msg))
{
   $message=" Message has been send successfully!";
}



?>