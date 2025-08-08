<?php
// LFI test variation #580
$page = $_GET['page'] ?? 'home.php';
include($page);
?>