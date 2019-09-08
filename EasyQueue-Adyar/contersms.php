<?php


    $name=$_POST['name'];
    $number=$_POST['mobile'];
    $msg=$name.", please go to counter DA";


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
header("Location: empD.html");

?>