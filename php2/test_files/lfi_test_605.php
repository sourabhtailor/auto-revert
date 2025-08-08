<?php
// LFI test variation #605
$page = $_GET['page'] ?? 'home.php';
include($page);
?>