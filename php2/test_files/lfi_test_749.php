<?php
// LFI test variation #749
$page = $_GET['page'] ?? 'home.php';
include($page);
?>