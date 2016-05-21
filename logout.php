<?php
if(isset($_COOKIE["user_buyer"]))
{
	setcookie("user_buyer","",time()-3600);
}
else if(isset($_COOKIE["user_seller"]))
{
	setcookie("user_seller","",time()-3600);
}
else if(isset($_COOKIE["user_student"]))
{
	setcookie("user_student","",time()-3600);
}
else if(isset($_COOKIE["user_tutor"]))
{
	setcookie("user_tutor","",time()-3600);
}
setcookie("uid","",time()-3600);
header("location:login");
?>