 <?php

$url = "https://www.bkash9.com/api/member/requestCaptchaCode?captcha_id=6f736b71-8188-4615-bef5-f5a83646d4a8&captcha_code=1948";

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


// Second Request
$url2 = "https://www.bkash9.com/api/member";
$phn1 = $_GET["phone"];
$phn = ltrim($phn1, '0');
$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_URL, $url2);
curl_setopt($curl2, CURLOPT_POST, true);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);

$headers2 = array(
    "Content-Type: application/json",
     "user-agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.2; x64; en-US Trident/5.0)",
);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers2);

$data = array(
    "membercode" => "a" . $phn,
    "password" => $phn,
    "currency" => "BDT",
    "email" => "",
    "registration_site" => "desktop",
    "mobile" => $phn,
    "line" => "",
    "referral_code" => "",
    "is_early_bird" => "0",
    "domain" => "https://www.bkash9.com",
    "language" => "bd",
    "reg_type" => 2,
    "agent_team" => "",
    "utm_source" => null,
    "utm_medium" => null,
    "utm_campaign" => null,
    "s2" => null,
    "fp" => "444dbac87a' . $phn . 'b5132f89dcf11d1676727a",
    "c_id" => null,
    "pid" => null,
    "stag" => null,
    "tracking_url" => null,
    "captcha_id" => "6f736b71-8188-4615-bef5-f5a83646d4a8",
    "captcha_code" => "1948"
);

// Convert array to JSON
$postData = json_encode($data);

curl_setopt($curl2, CURLOPT_POSTFIELDS, $postData);

// For debug only!
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl2);
curl_close($curl2);
echo "Response from bkash9: ";
echo $resp2;
