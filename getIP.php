<?php


  // Get the client IP address
  $ip = $_SERVER['REMOTE_ADDR']

  echo $ip;

  // longer, better way
  $http_client_ip       = $_SERVER['HTTP_CLIENT_IP'];        // Internet ip address
  $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];  // checking for proxy server
  $remote_addr          = $_SERVER['REMOTE_ADDR']; //
   
  if(!empty($http_client_ip)){
    $ip = $http_client_ip;
  }elseif(!empty($http_x_forwarded_for)){
    $ip = $http_x_forwarded_for;
  }else{
  	$ip = $remote_addr;
  }

  echo $ip;




?>
