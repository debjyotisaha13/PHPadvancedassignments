<?php

$url = 'https://www.innoraft.com';
$collection_name = 'jsonapi/node/services';
$request_url = $url . '/' . $collection_name;

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$response = curl_exec($curl);

if(curl_error($curl)){
  echo "error: ".curl_error($curl);
}
curl_close($curl);

$data = json_decode($response,true);

function title($x,$data){
  return $data['data'][$x]['attributes']['title'];
}


function image($x, $data, $url){
$url2 = $data['data'][$x]['relationships']['field_image']['links']['related']['href'];

$curl2 = curl_init($url2);

curl_setopt($curl2,CURLOPT_RETURNTRANSFER,true);
$response2 = curl_exec($curl2);



if (curl_error($curl2)) {
  echo "Error: ".curl_error($curl2);
}
curl_close($curl2);
$data2 = json_decode($response2,true);

$img_url = $url.$data2['data']['attributes']['uri']['url'];
return $img_url;
}


function body($x,$data,$url){
  $url3 = $data['data'][$x]['links']['self']['href'];
  $curl3 = curl_init($url3);
  curl_setopt($curl3,CURLOPT_RETURNTRANSFER, true);
  $response3 = curl_exec($curl3);
  if (curl_error($curl3)) {
  echo "Error: ".curl_error($curl2);
}
curl_close($curl3);
$data3 = json_decode($response3,true);
$body_url = $url.$data3['data']['attributes']['body']['value'];
return $body_url;
}

?>
