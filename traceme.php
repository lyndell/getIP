<?php

	# header — Send a raw HTTP header
	#
	# http://php.net/manual/en/function.header.php
	#
	header('Content-Type: text/plain');


  // Get the client IP address
  $ip = $_SERVER['REMOTE_ADDR'];
	echo "running traceroute to IP; $ip...\n\n";

	# http://php.net/manual/en/function.passthru.php
  passthru("traceroute $ip");

	echo "\n  \$returnvalue: $returnvalue";


?>
