<?php

/*
FIX:

printi:1 Failed to load http://localhost.loc/react-app/build/php/actions.php?printi=true: No 'Access-Control-Allow-Origin' header is present on the requested resource. Origin 'http://localhost:3000' is therefore not allowed access. If an opaque response serves your needs, set the request's mode to 'no-cors' to fetch the resource with CORS disabled.
printi:1 Uncaught (in promise) TypeError: Failed to fetch

*/
header('Access-Control-Allow-Origin: *');

if ( array_key_exists('phpinfo', $_REQUEST) ){

  phpinfo();

}

if ( array_key_exists('printi', $_REQUEST) ){

  //var_dump($_REQUEST);

  # Get JSON as a string
  $_jsonStr = file_get_contents('php://input');
  //var_dump($_jsonStr);

  # Get as an object
  $jsonObj = json_decode($_jsonStr, true);
  //var_dump($jsonObj);

  $origin_zip_code = "04012-090";
  $destination_zip_code = "04037-003";
  $weight = 0.5;
  $cost_of_goods = "100";
  $width = "10";
  $height = "10";
  $length = "25";

  if( !empty($jsonObj) ){
    $origin_zip_code = $jsonObj['origin_zip_code'];
    $destination_zip_code = $jsonObj['destination_zip_code'];
    $weight = $jsonObj['weight'];
    $cost_of_goods = $jsonObj['cost_of_goods'];
    $width = $jsonObj['width'];
    $height = $jsonObj['height'];
    $length = $jsonObj['length'];
  }

  $jsonStr = <<<EOF
{
"origin_zip_code": "$origin_zip_code",
"destination_zip_code": "$destination_zip_code",
"volumes": [
  {
    "weight": "$weight",
    "volume_type": "BOX",
    "cost_of_goods": "$cost_of_goods",
    "width": "$width",
    "height": "$height",
    "length": "$length"
  }
],
"additional_information": {
  "free_shipping": false,
  "extra_cost_absolute": 0,
  "extra_cost_percentage": 0,
  "lead_time_business_days": 0,
  "sales_channel": "hotsite",
  "tax_id": "22337462000127",
  "client_type": "gold",
  "payment_type": "CIF",
  "is_state_tax_payer": false,
  "delivery_method_ids": [
    1,
    2,
    3
  ]
},
"identification": {
  "session": "04e5bdf7ed15e571c0265c18333b6fdf1434658753",
  "page_name": "carrinho",
  "url": "http://www.intelipost.com.br/checkout/cart/"
}
}
EOF;

  //var_dump($jsonStr);

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.intelipost.com.br/api/v1/quote/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $jsonStr,
    CURLOPT_HTTPHEADER => array(
      "api-key: 9009f95101bf48b01a50928a2a71ed1ae9083fc1d3c08439b0613dfc38e656c5",
      "content-type: application/json",
      "platform: intelipost-docs",
      "platform-version: v1.0.0",
      "plugin: intelipost-plugin",
      "plugin-version: v2.0.0"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {

    header('Content-type: application/json');
    echo ($response);
  }

}

?>
