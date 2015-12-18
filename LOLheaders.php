<?php

  # header — Send a raw HTTP header
  #
  # http://php.net/manual/en/function.header.php
  #
  header('Content-Type: text/plain');
  header('X-LOL1: Oh, Hi.', false);
  header('X-LOL2: ', false);
  header('X-LOL3: look at me, LOL.', false);
# header('X-LOL4: ', false);
# header('X-LOL5: ', false);
# header('X-LOL6: ', false);


  // Get the client IP address
  $ip = $_SERVER['REMOTE_ADDR'];
  echo "running traceroute to IP; $ip...\n\n";

  echo "No, no not really.  LOL.\n";

  echo "\n  \$returnvalue: $returnvalue";


?>
