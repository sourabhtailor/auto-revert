<?php
// LFI test variation #889
$page = $_GET['page'] ?? 'home.php';
include($page);
?>