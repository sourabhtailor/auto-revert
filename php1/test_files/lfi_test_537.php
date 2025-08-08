<?php
// LFI test variation #537
$page = $_GET['page'] ?? 'home.php';
include($page);
?>