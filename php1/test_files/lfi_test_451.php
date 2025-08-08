<?php
// LFI test variation #451
$page = $_GET['page'] ?? 'home.php';
include($page);
?>