<?

$url = 'http://api.cloudcommercefactory.com/orders';
//Avec les paramètres facultatifs
//$url = 'http://api.cloudcommercefactory.com/orders?orderId=3832&status=Waiting&dateStart=2012-10-01&dateEnd=2012-12-01&customerName=Pierre';
//status=Cancelled or Waiting or Accepted or Shipped
$method = 'GET';
$privateKey = 'F302A000-FB41-4C14-B9D4-BEBF8D24C909';
$apiId = 'A1B7583B-0613-4768-AF07-E0CA639A698B';
$gmtDate = gmdate("d/m/Y H:m");
$requestSignature = hash_hmac('sha1', $gmtDate, $privateKey, true);
$base64RequestSignature = base64_encode($requestSignature);

$headers = array(
'Accept: application/xml',
'Content-Type: application/xml',
'Gmt-Date: ' . $gmtDate,
'Api-Id: ' . $apiId,
'Request-Signature: ' . $base64RequestSignature
);

$handle = curl_init();

curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

curl_close ($handle);

?>