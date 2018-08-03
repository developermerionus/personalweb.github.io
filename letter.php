<?php
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$address = $_POST["address"];
$subject = $_POST["subject"];
$other = $_POST["other"];
echo $name;
$msg = $name;
$msg = wordwrap($msg,70);
mail("532630938@qq.com","IT240 Email Test File From Lei Fu",$msg);
?>