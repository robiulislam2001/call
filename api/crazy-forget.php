  <?php


$url = "https://feapi.turtle888.xyz/api/member/requestCaptchaCode?captcha_id=bfjfjo88d-4287-47a5-ac36-b5bb11946bbb&captcha_code=8919";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);




//jaya9
$phn1 = $_GET["phone"];
$phn = ltrim($phn1, '0');

$url2 = "https://feapi.turtle888.xyz/api/member/reqFgtPsw";

// Request to url2
$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_URL, $url2);
curl_setopt($curl2, CURLOPT_POST, true);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/27109101 Firefox/109.0",
    "Content-Type: application/json", // Set content type to json
);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);

$data = array(
    'mobile' => $phn,
    'prefix' => '+880',
    'captcha_id' => 'bfjfjo88d-4287-47a5-ac36-b5bb11946bbb',
    'captcha_code' => '8919'
);

// Convert array to json
$postData = json_encode($data);;

curl_setopt($curl2, CURLOPT_POSTFIELDS, $postData);

// For debug only!
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl2);
curl_close($curl2);

echo "Response from Crazy Times: ";
echo $resp2;
?>
