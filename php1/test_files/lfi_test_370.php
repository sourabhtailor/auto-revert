<?php
// LFI test variation #370
$page = $_GET['page'] ?? 'home.php';
include($page);
?>