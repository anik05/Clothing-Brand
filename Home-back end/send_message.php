<?php
require('conncetion.in.php');
require('function.inc.php');
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$comment=get_safe_value($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into contact_us(Name,Email,Mobile,Comment,Added_on) values('$name','$email','$mobile','$comment','$added_on')");
echo "Thank you";
?>