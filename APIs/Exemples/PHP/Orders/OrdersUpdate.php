<?

$url = 'http://api.cloudcommercefactory.com/orders';
$method = 'POST';
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

$data = file_get_contents('OrdersUpdate.xml');

$handle = curl_init();

curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_POST, true);
curl_setopt($handle, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

curl_close ($handle);

?>