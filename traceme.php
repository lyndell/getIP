<?php


  // Get the client IP address
  $ip = $_SERVER['REMOTE_ADDR'];
	echo "running traceroute to IP; $ip...\n\n";

	# http://php.net/manual/en/function.passthru.php
  passthru("traceroute $ip");

	echo "\n  \$returnvalue: $returnvalue";


?>
