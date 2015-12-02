http://codingcyber.com/get-client-ip-address-php-2688/



By using this single line of function you can get client IP address in php.
1	// Get the client IP address
2	$ip = $_SERVER['REMOTE_ADDR']

But this is not the best way to php get client IP address, we can use different server super global functions to check valid IP address.(http client IP and http x forwarded for, remote address)
1	$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; //Internet ip address
2	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; //checking for proxy server
3	$remote_addr = $_SERVER['REMOTE_ADDR']; //
4	 
5	if(!empty($http_client_ip)){
6	    $ip = $http_client_ip;
7	}elseif(!empty($http_x_forwarded_for)){
8	    $ip = $http_x_forwarded_for;
9	}else{
10	    $ip = $remote_addr;
11	}
12	 
13	echo $ip;

$_SERVER[‘HTTP_CLIENT_IP’] : This function will be used to get ip address of internet not the local ip address or ip address which is assigned by router.

$_SERVER[‘HTTP_X_FORWARDED_FOR’] : This function will be used to find client computer is using proxy server or not.

$_SERVER[‘REMOTE_ADDR’] : This is the remote ip address of the computer.









http://php.net/manual/en/reserved.variables.server.php
