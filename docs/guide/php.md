# PHP Code example using [CURL](https://www.php.net/manual/en/ref.curl.php)


Curl 7.34.0 or more recent (Unless using Guzzle)

```php
<?php 

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}



$get_data = callAPI('GET', 'https://maylancer.org/api/nuban/api.php?account_number={account_number}&bank_code={code}', false);
$response = json_decode($get_data, true);




if (isset($response['account_name'])) {


  $name = explode(' ', $response['account_name']);

    $length=count($name);
  //create array
    $data = array(
      "firstname" => $name[0],
      "lastname" => $name[$length-1],
        "account_name" => $response['account_name'],
        "account_number" => $response['account_number'],
        "bank_name" => $response['Bank_name'],
        "status" => 'success'

    );
}else{

  $data = array(
        "message" => 'Invalid account number entered, '.$response['message'],
        "status" => 'error'

    );
}





echo json_encode($data, JSON_PRETTY_PRINT);

?>
```