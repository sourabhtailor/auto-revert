<?php
// LFI test variation #625
$page = $_GET['page'] ?? 'home.php';
include($page);
?>