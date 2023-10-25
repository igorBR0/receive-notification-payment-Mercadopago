<?php

// ACCESS TOKEN MERCADO PAGO
//$config       = require_once '../config.php';
$access_token = 'YOUR TOKEN';

// mude para true para ver toda a reposta do mercado pago
$debug = true; ##########

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>   'https://api.mercadopago.com/v1/payments/search?sort=date_created&criteria=desc',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ' . $access_token
  ),
));

$response = curl_exec($curl);


$obj = json_decode($response);

curl_close($curl);


 echo "<pre>", print_r($obj), "</pre>";
//echo "<pre>", print_r($obj->results[0]->id), "</pre>";
//echo "<pre>", print_r($obj->results[0]->order->id), "</pre>";
//echo "<pre>", print_r($obj->results[0]->payment_type_id), "</pre>";

//echo "<pre>", print_r($obj->results[0]->status_detail), "</pre>";
//echo "<pre>", print_r($obj->results[0]->payer->email), "</pre>";

