<?php

  # header — Send a raw HTTP header
  #
  # http://php.net/manual/en/function.header.php
  #
  header('X-LOL1: Oh, Hi.', false);
  header('X-LOL2: ', false);
  header('X-LOL3: How long can we make this?'); # Can't embed line breaks, it seems.
# header('X-LOL4: ', false);
# header('X-LOL5: ', false);
# header('X-LOL6: ', false);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
<TITLE>Hello</TITLE>
</HEAD>
<BODY>
To really see what's going on here, you need to check the headers.
</BODY>
</HTML>

