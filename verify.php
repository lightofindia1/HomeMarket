<?php
error_reporting(0);
include("config.php");
include("functions.php");

$response=array("msg"=>"undefined","data"=>"");
if(isset($_POST["login"]))
{
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$sql="SELECT * FROM users WHERE (username='$username' OR email='$username') AND password='$password'";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$usertype=false;
		$uid=0;
		while($row=$result->fetch_assoc())
		{
			$usertype=$row["usertype"];
			$uid=$row["uid"];
			$reg_status=$row["reg_status"];
			$email=$row["email"];
		}
		if($usertype)
		{
			if($reg_status){
				$last_log=time();
				$loginhash=md5(time());
				$sql="UPDATE `users` SET `loginhash`='$loginhash',`last_log`='$last_log' WHERE `uid`='$uid'";
				if (mysqli_query($conn, $sql)) {
					if($_POST["remember"]=="true")
					{
						setcookie("user_".$usertype, $loginhash,time()+60*60*24*7);
						setcookie("uid", $uid,time()+60*60*24*7);
					}
					else
					{
						setcookie("user_".$usertype, $loginhash);
						setcookie("uid", $uid);
					}
					$response["msg"]="success";
					$response["data"]=$usertype;
				}
				else
				{
					$response["msg"]="fail";
				}
			}
			else
			{
				$response["msg"]="activate";
				$response["email"]=$email;
			}
		}
		else
		{
			$reponse["msg"]="fail";
		}
	}
	else
	{
		$response["msg"]="wrong";
	}
}
else if(isset($_POST["register"]))
{
	$fullname=$_POST["fullname"];
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=md5($_POST["password"]);
	$usertype=$_POST["usertype"];
	$lat=$_POST["lat"];
	$long=$_POST["long"];
	$sql="SELECT * FROM users WHERE username='$username'";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$response["msg"]="username";
	}
	else
	{
		$sql="SELECT * FROM users WHERE email='$email'";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$response["msg"]="email";
		}
		else
		{
			$reg_code=GenerateCode();
			$reg_date=time();
			$sql="INSERT INTO users (`fullname`,`username`,`email`,`password`,`usertype`,`lat`,`long`,`reg_code`,`reg_date`) VALUES ('$fullname','$username','$email','$password','$usertype','$lat','$long','$reg_code','$reg_date')";
			if (mysqli_query($conn, $sql)) {
				$sql="SELECT * FROM users WHERE email='$email'";
				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc()) {
						/*$to=$email;
						$from_name="HomeMarket";
						$from_email="info@homemarket.cf";
						$subject="Activate Your Account Now - HomeMarket";
						$message='
						<!DOCTYPE html>
						<html lang="en">
						<head>
							<meta charset="utf-8">
							<title>Activate Your Account Now - HomeMarket</title>
							<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
							<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
							<meta name="apple-mobile-web-app-capable" content="yes">
							<meta name="apple-touch-fullscreen" content="yes">
							<meta name="description" content="Welcome to HomeMarket">
							<meta name="author" content="Manikiran">
							<link href="https://www.homemarket.cf/assets/css/email.css" type="text/css" rel="stylesheet">

							</head>

							<body>
								<img src="https://www.homemarket.cf/assets/img/logo-dark.png">
								<h2>Welcome to HomeMarket, '.$fullname.'!</h2>
								<strong>Username:</strong> '.$username.'<br>
								<strong>Activation Code:</strong> '.$reg_code.'<br><br>
								<a class="btn" href="https://www.homemarket.cf/confirm?email='.$email.'&code='.$reg_code.'">Confirm Now</a><br><br>
								<small>If above link is not working, please visit:  <a href="https://www.homemarket.cf/confirm?email='.$email.'&code='.$reg_code.'">https://www.homemarket.cf/confirm?email='.$email.'&code='.$reg_code.'</a></small>
								<hr>
								<p>At HomeMarket, our vision is to be India\'s most homemakers centric company; to build a place where people can come to find and discover virtually anything they want to buy online. Visit HomeMarket.cf to shop/find for over 3 hundred products.</p>
								<h6>In case, you did not register, no further action is required from your end.</h6>
							</body>
						</html>';
						// Always set content-type when sending HTML email
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						// More headers
						$headers .= 'From: '.$from_name.' <'.$from_email.'>' . "\r\n";
						mail($to,$subject,$message,$headers);*/
						$response["msg"]="success";
					}
				}
				else
				{
					$response["msg"]="fail";
				}
			}
			else
			{
				$response["msg"]="fail";
			}
		}
	}
}
else if(isset($_POST["confirm"]))
{
	$email=$_POST["email"];
	$reg_code=$_POST["code"];
	$sql="SELECT * FROM users WHERE email='$email' AND reg_code='$reg_code'";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$sql="UPDATE `users` SET `reg_status`=1 WHERE email='$email'";
		if (mysqli_query($conn, $sql)) {
			$response["msg"]="success";
		}
		else
		{
			$response["msg"]="fail";
		}
	}
	else
	{
		$response["msg"]="fail";
	}
}
else if(isset($_POST["add_prod"]))
{
	$title=$_POST["title"];
	$desc=$_POST["desc"];
	$price=$_POST["price"];
	$cat=$_POST["cat"];
	$sub_cat=$_POST["sub_cat"];
	$uid=$_COOKIE["uid"];
	$dt=time();
	if(isset($_FILES["img"])){
		$target_dir = "uploads/products/";
		$target_file = $target_dir . $dt . "." . pathinfo(basename($_FILES["img"]["name"]),PATHINFO_EXTENSION);
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
			$sql="INSERT INTO products (title,description,price,uid,img,cat,sub_cat,dt) VALUES ('$title','$description','$price','$uid','$target_file','$cat','$sub_cat','$dt')";
			if (mysqli_query($conn, $sql)) {
				$response["msg"]="success";
			}
			else
			{
				$response["msg"]="fail";
			}
		}
	}
	else
	{
		$sql="INSERT INTO products (title,description,price,uid,img,cat,sub_cat,dt) VALUES ('$title','$desc','$price','$uid','false','$cat','$sub_cat','$dt')";
		if (mysqli_query($conn, $sql)) {
			$response["msg"]="success";
		}
		else
		{
			$response["msg"]="fail";
		}
	}
}
else if(isset($_POST["edit_prod"]))
{
	$pid=$_POST["pid"];
	$title=$_POST["title"];
	$desc=$_POST["desc"];
	$price=$_POST["price"];
	$cat=$_POST["cat"];
	$sub_cat=$_POST["sub_cat"];
	$uid=$_COOKIE["uid"];
	$dt=time();
	if(isset($_FILES["img"])){
		$target_dir = "uploads/products/";
		$target_file = $target_dir . $dt . "." . pathinfo(basename($_FILES["img"]["name"]),PATHINFO_EXTENSION);
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
			$sql="UPDATE products SET title='$title',description='$desc',price='$price',img='$target_file',cat='$cat',sub_cat='$sub_cat' WHERE pid='$pid'";
			if (mysqli_query($conn, $sql)) {
				$response["msg"]="success";
			}
			else
			{
				$response["msg"]="fail";
			}
		}
	}
	else
	{
		$sql="UPDATE products SET title='$title',description='$desc',price='$price',cat='$cat',sub_cat='$sub_cat' WHERE pid='$pid'";
		if (mysqli_query($conn, $sql)) {
			$response["msg"]="success";
		}
		else
		{
			$response["msg"]="fail";
		}
	}
}
else if(isset($_POST["add_class"]))
{
	$title=$_POST["title"];
	$desc=$_POST["desc"];
	$cat=$_POST["cat"];
	$price=$_POST["price"];
	$per=$_POST["per"];
	$uid=$_COOKIE["uid"];
	$dt=time();
	$sql="INSERT INTO classes (title,description,cat,price,uid,per,dt) VALUES ('$title','$desc','$cat','$price','$uid','$per','$dt')";
	if (mysqli_query($conn, $sql)) {
		$response["msg"]="success";
	}
	else
	{
		$response["msg"]="fail";
	}
}
else if(isset($_POST["edit_class"]))
{
	$cid=$_POST["cid"];
	$title=$_POST["title"];
	$desc=$_POST["desc"];
	$cat=$_POST["cat"];
	$price=$_POST["price"];
	$per=$_POST["per"];
	$uid=$_COOKIE["uid"];
	$sql="UPDATE classes SET title='$title',description='$desc',cat='$cat',price='$price',per='$per' WHERE cid='$cid'";
	if (mysqli_query($conn, $sql)) {
		$response["msg"]="success";
	}
	else
	{
		$response["msg"]="fail";
	}
}
else
{
	$response["msg"]="invalid_request";
}
echo json_encode($response);
?>