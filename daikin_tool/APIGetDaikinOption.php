<?php

// Call to API 
$tmpfsuitename = dirname(__FILE__).'/cookiesuitecrm.txt';
$fields = array();
$fields['user_name'] = 'admin';
$fields['username_password'] = 'pureandtrue2020*';
$fields['module'] = 'Users';
$fields['action'] = 'Authenticate';

$url = 'https://suitecrm.pure-electric.com.au/';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_COOKIEJAR, $tmpfsuitename);
curl_setopt($curl, CURLOPT_POST, 1);//count($fields)
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($fields));
curl_setopt($curl, CURLOPT_COOKIEFILE, $tmpfsuitename);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_COOKIESESSION, TRUE);
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
$result = curl_exec($curl);
// 2 Calling CURL --- convert lead to quote
$request_data = array(
    'quote_id' => $_POST['quote_id'],
);

$source = "https://suitecrm.pure-electric.com.au/index.php?entryPoint=APIGetDataProductLinesFromQuote";

curl_setopt($curl, CURLOPT_URL, $source);
curl_setopt($curl, CURLOPT_COOKIEJAR, $tmpfsuitename);
curl_setopt($curl, CURLOPT_POST, 1);//count($fields)
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($request_data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_COOKIEFILE, $tmpfsuitename);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_COOKIESESSION, TRUE);
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
$result = curl_exec($curl);
curl_close($curl);

echo $result;
