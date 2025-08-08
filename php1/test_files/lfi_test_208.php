<?php
// LFI test variation #208
$page = $_GET['page'] ?? 'home.php';
include($page);
?>