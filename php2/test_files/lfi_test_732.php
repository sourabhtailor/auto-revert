<?php
// LFI test variation #732
$page = $_GET['page'] ?? 'home.php';
include($page);
?>