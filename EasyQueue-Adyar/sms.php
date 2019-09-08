<!DOCTYPE html>
<html>
<head>
	<title>Success!</title>
	<style type="text/css">
		body
		{
			background-color: #eb6b0f;
		}
		h1
		{
			color: white;
			font-size: 50px;
		}
		img
		{
			position:relative;

			height:200px;

			width:75%;

			left:150px;

		}
		
		h2
		{
			color: white;
			font-size: 40px;
		}
	</style>
</head>
<body>
	<header>

    	<img src="logo.png" alt="Logo" />

    </header>

<h1><center>Your request has been accepted.</center></h1>
<h2><center>Your token number will be sent as an sms to your registered mobile number.</center></h2>
</body>
</html>
<?php


    $number=$_POST['mobile'];
    $name=$_POST['name'];
    $text=$_POST['result'];
    $n=$_POST['nop'];
    $msg=$name.", welcome to SYndicate Bank.\nYour request has been accepted.\nYour token number is ".$text."\nThere are ".$n." people before you.\nYour estimated waiting time is ".($n*5)." minutes.";


$url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($msg);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=VVHLL0MD2KSEPELFGR52M20ZBED3NOIN&secret=IKQTB860V3YSY9NM&usetype=stage&phone=$number&senderid=laknargovind@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;

?>
