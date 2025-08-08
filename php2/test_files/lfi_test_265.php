<?php
// LFI test variation #265
$page = $_GET['page'] ?? 'home.php';
include($page);
?>