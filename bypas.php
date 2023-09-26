<?php
function hcap($key,$sitekey,$url){
$inn = json_decode(file_get_contents("https://api.1stcaptcha.com/hcaptcha?apikey=".$key."&sitekey=".$sitekey."&siteurl=".urlencode($url)))->TaskId;
while(true){
$result = file_get_contents("https://api.1stcaptcha.com/getresult?apikey=".$key."&taskid=".$inn);
$cek = strpos($result,"PROCESSING");
echo "\rProses bypas...!!!\r";
if($cek){
sleep(2);
echo "\r                           \r";
}else{
return json_decode($result)->Data->Token;
break;
}
}
}
function v2($url,$key,$sitekey){
$taskid = json_decode(file_get_contents("https://api.1stcaptcha.com/recaptchav2?apikey=$key&sitekey=$sitekey&siteurl=".urlencode($url)."&invisible=false"))->TaskId;
while(true){
$result = file_get_contents("https://api.1stcaptcha.com/getresult?apikey=$key&taskid=$taskid");
$cek = strpos($result,"PROCESSING");
echo "\rProses bypas...!!!\r";
if($cek){
sleep(2);
echo "\r                           \r";
}else{
return json_decode($result)->Data->Token;
break;
}
}
}
function v3($url,$key,$sitekey){
$taskid = json_decode(file_get_contents("https://api.1stcaptcha.com/recaptchav3?apikey=$key&sitekey=$sitekey&siteurl=".urlencode($url)."&invisible=false"))->TaskId;
while(true){
$result = file_get_contents("https://api.1stcaptcha.com/getresult?apikey=$key&taskid=$taskid");
$cek = strpos($result,"PROCESSING");
echo "\rProses bypas...!!!\r";
if($cek){
sleep(2);
echo "\r                           \r";
}else{
return json_decode($result)->Data->Token;
break;
}
}
}
function ocr($key,$image){
$data = json_encode([
"Apikey" =>  $key,
     "Type" =>  "imagetotext",
     "Image" =>  base64_encode(file_get_contents($image)),
     "Math" =>  "false"
]);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.1stcaptcha.com/recognition");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: application/json; charset=utf-8"));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$inn = json_decode(curl_exec($ch))->TaskId;
$result = file_get_contents("https://api.1stcaptcha.com/getresult?apikey=".$key."&taskid=".$inn);
return json_decode($result)->Data;
}
?>
