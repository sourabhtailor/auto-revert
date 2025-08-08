<?php
// LFI test variation #501
$page = $_GET['page'] ?? 'home.php';
include($page);
?>