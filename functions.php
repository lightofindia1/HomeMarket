<?php
date_default_timezone_set('asia/kolkata');

function safe_encrypt($string, $secret_key,$secret_iv){
	$output = false;
    $encrypt_method = "AES-256-CBC";
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);
    return $output;
}

function safe_decrypt($string, $secret_key,$secret_iv){
	$output = false;
    $encrypt_method = "AES-256-CBC";
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    return $output;
}
function GenerateCode($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
function LoginVerify(){
	if(!isset($conn))
	{
		include("config.php");
	}
	$uid=0;
	$loginhash="";
	$cookies=0;
	if((isset($_COOKIE["user_buyer"]))&&isset($_COOKIE["uid"]))
	{
		$loginhash=$_COOKIE["user_buyer"];
		$uid=$_COOKIE["uid"];
		$cookies=1;
	}
	else if((isset($_COOKIE["user_seller"]))&&isset($_COOKIE["uid"]))
	{
		$loginhash=$_COOKIE["user_seller"];
		$uid=$_COOKIE["uid"];
		$cookies=1;
	}
	else if((isset($_COOKIE["user_student"]))&&isset($_COOKIE["uid"]))
	{
		$loginhash=$_COOKIE["user_student"];
		$uid=$_COOKIE["uid"];
		$cookies=1;
	}
	else if((isset($_COOKIE["user_tutor"]))&&isset($_COOKIE["uid"]))
	{
		$loginhash=$_COOKIE["user_tutor"];
		$uid=$_COOKIE["uid"];
		$cookies=1;
	}
	if($cookies)
	{
		$sql="SELECT * FROM users WHERE uid='$uid' AND loginhash='$loginhash'";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			return False;
		}
		else
		{
			return True;
		}
	}
	else
	{
		return True;
	}
}
function GetDistance($lat1, $long1, $lat2, $long2)
{
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving&key=AIzaSyDotSQv_5iX0j8WXAU4fP5Hc7sMTv9tdcY";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response, true);
	if(isset($response_a['rows'][0]['elements'][0]['distance']['text']))
	{
		$dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
		$time = $response_a['rows'][0]['elements'][0]['duration']['text'];

		return array('distance' => $dist, 'time' => $time);
	}
	else
	{
		return "fail";
	}
}
function u2n($uid){
	if(!isset($conn))
	{
		include("config.php");
	}
	$sql="SELECT fullname FROM users WHERE uid='$uid'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc()){
			return $row["fullname"];
		}
	}
	else
	{
		return False;
	}
}
function u2a($uid){
	if(!isset($conn))
	{
		include("config.php");
	}
	$sql="SELECT `lat`,`long` FROM users WHERE uid='$uid'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc()){
			$url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$row["lat"].",".$row["long"]."&key=AIzaSyDotSQv_5iX0j8WXAU4fP5Hc7sMTv9tdcY";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$response = curl_exec($ch);
			curl_close($ch);
			$response_a = json_decode($response, true);
			if(isset($response_a['results'][0]['formatted_address']))
			{
				return $response_a['results'][0]['formatted_address'];
			}
			else
			{
				return False;
			}
		}
	}
	else
	{
		return False;
	}
}
?>