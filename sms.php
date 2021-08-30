
<?php
function password_generate($int) 
{
  $data = '1234567890';
  return $code= substr(str_shuffle($data), 0, $int);
}
  echo password_generate(4)."\n";
  


 function sendSMS($myMobile, $mySms)
{
$myMobile = '21656243568';
$mySms = password_generate(4);
$mySender = 'TunSMS Test';

$key = "9o2ETLY3/NaxMGONk9HF8cIVYx2SpWtNwQutfDMnzNL2sLVha9IE4roOx24f31
ASl04PrpOiiUh/IDxz/-/MkFEISC4b5zY4kz";


$Url_str ="https://www.tunisiesms.tn/client/Api/Api.aspx?fct=sms&key=%KEY%&mobile=%MSISDN%&sms=%SMS%&sender=%SENDER%";

$Url_str = str_replace("%MSISDN%",$myMobile,$Url_str);
$Url_str = str_replace("%SMS%",urlencode($mySms),$Url_str);
$Url_str = str_replace("%SENDER%",urlencode($mySender),$Url_str);
$Url_str = str_replace("%KEY%",urlencode($key),$Url_str);


echo http_response($Url_str);

}


function http_response($url)
{
    $ch = curl_init();

    $options = array(
        CURLOPT_URL            => $url ,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING       => "",
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_CONNECTTIMEOUT => 120,
        CURLOPT_TIMEOUT        => 120,
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_SSL_VERIFYPEER => false,
    );
    curl_setopt_array( $ch, $options );
    $response = curl_exec($ch);
   
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ( $httpCode != 200 ){
        return "Return code is {$httpCode} \n"
            .curl_error($ch);
    } else {
        //echo "<pre>".htmlspecialchars($response)."</pre>";
        return $response;
    }

    curl_close($ch);
}
sendSMS($myMobile, $mySms);
?>