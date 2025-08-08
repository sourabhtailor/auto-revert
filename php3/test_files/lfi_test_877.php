<?php
// LFI test variation #877
$page = $_GET['page'] ?? 'home.php';
include($page);
?>