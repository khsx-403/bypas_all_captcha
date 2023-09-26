<?php
require_once("bypas.php");


//recaptcha v2
//key,sitekey,url
echo v2("5d41402abc4b2a76b9719d911017c592","6Lf-_RQnAAAAAAwu1fT9M53g7iXtgZVdIn25E2_6","https://example.com/");


//recaptcha v3
//key,sitekey,url
echo v3("5d41402abc4b2a76b9719d911017c592","6Lf-_RQnAAAAAAwu1fT9M53g7iXtgZVdIn25E2_6","https://example.com/");


//Hcaptcha
//key,sitekey,url
echo hcap("5d41402abc4b2a76b9719d911017c592","6Lf-_RQnAAAAAAwu1fT9M53g7iXtgZVdIn25E2_6","https://example.com/");


//OCR
//key, name image file
echo ocr("5d41402abc4b2a76b9719d911017c592","mage.png");



?>
