 <?php


$url2 = "https://feapi.turtle888.xyz/api/member";
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
//{"membercode":"jsdjsvdhvs","password":"boss2024","currency":"BDT","email":"","registration_site":"desktop","mobile":"1751879745","line":"","referral_code":"","is_early_bird":"0","domain":"https://crazytime.app","language":"bd","reg_type":2,"agent_team":"","utm_source":null,"utm_medium":null,"utm_campaign":null,"s2":null,"fp":"1897b2041abce3aa84b2201c93c9e7af","c_id":null,"pid":null,"stag":null,"tracking_url":null}
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
    "domain" => "https://feapi.turtle888.xyz",
    "language" => "bd",
    "reg_type" => 2,
    "agent_team" => "",
    "utm_source" => null,
    "utm_medium" => null,
    "utm_campaign" => null,
    "s2" => null,
    "fp" => "444dbac87a' . $phn . 'b5132f89dkf11d1676727a",
    "c_id" => null,
    "pid" => null,
    "stag" => null,
    "tracking_url" => null,
    
);

// Convert array to JSON
$postData = json_encode($data);

curl_setopt($curl2, CURLOPT_POSTFIELDS, $postData);

// For debug only!
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl2);
curl_close($curl2);
echo "response from Crazy Times:";
echo ($resp2);
