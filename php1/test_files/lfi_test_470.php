<?php
// LFI test variation #470
$page = $_GET['page'] ?? 'home.php';
include($page);
?>