<?php
echo "<h1>hello php</h1>" . PHP_EOL;
echo "<p>php version: " . phpversion() . "</p>" . PHP_EOL;
echo "<p>" . $_SERVER['REMOTE_ADDR'] . "</p>" . PHP_EOL;
?>

<ul>
  <li>
    <a href="./phperrortest.php">PHP Error test</a>
  </li>
  <li>
    <a href="./phpinfo.php">PHP Info</a>
  </li>
  <li>
    <a href="./php-mail.php">PHP Mail</a>
  </li>
  <li>
    <a href="http://127.0.0.1:1080" target="_blank">mailcatcher</a>
  </li>
</ul>

