<?php
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$address = $_POST["address"];
$subject = $_POST["subject"];
$other = $_POST["other"];
echo $name;
$msg = $name." ".$email." ".$website." ".$address." ".$subject." ".$other;
echo $msg;
$msg = wordwrap($msg,70);
//mail("532630938@qq.com","This email is from your personal website",$msg);
?>