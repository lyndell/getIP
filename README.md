# README

A couple simple PHP scritps for getting a client's IP address.

## Version 1

Simply:

    $ip = $_SERVER['REMOTE_ADDR']

## Version 2

    $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];             //Internet ip address
    $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; //checking for proxy server
    $remote_addr = $_SERVER['REMOTE_ADDR']; 
