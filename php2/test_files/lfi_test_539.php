<?php
// LFI test variation #539
$page = $_GET['page'] ?? 'home.php';
include($page);
?>