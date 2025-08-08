<?php
// LFI test variation #189
$page = $_GET['page'] ?? 'home.php';
include($page);
?>