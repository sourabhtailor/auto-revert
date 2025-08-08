<?php
// LFI test variation #619
$page = $_GET['page'] ?? 'home.php';
include($page);
?>