<?php
$xmlstr = <<<XML
<appcomments>lll
    <universal_app_id>1738743273</universal_app_id>
    <lender_app_id>1353</lender_app_id>
    <Comments type="credit">
        <comment line="1">PAUL, NEED EXPRESS RATE 6.89</comment>
        <comment line="2">Brb</comment>
        <comment line="3">Hello World</comment>
        <date>2001-03-19</date>
    </Comments>
    <dt_lender_id>FG3</dt_lender_id>
    <dt_dealer_id>142030</dt_dealer_id>
    <lender_dealer_id>999999</lender_dealer_id>
    <credit_type type="individual"/>
    <app_type type="personal"/>
    <product_type type="retail"/>
</appcomments>
XML;


$xml = new SimpleXMLElement($xmlstr);

$url = 'http://localhost:5000//dealertrack/comment';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "XML=".$xml->asXML());
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
var_dump($response);
curl_close($ch);
