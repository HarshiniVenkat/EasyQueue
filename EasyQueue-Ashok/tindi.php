
<?php
echo "hello";

    $number=$_POST['mobile'];

    $name=$_POST['name'];
    $text=$name." your turn is about to come in a few minutes.Please be ready";
    


$url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($text);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=ZI5R21KHOG0RRVAQVNQELFMSK0HF3Z35&secret=4BQQBCYD2EHSKMIW&usetype=stage&phone=$number&senderid=laknarpower@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;



?>