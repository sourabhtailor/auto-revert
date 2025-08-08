<?php
// LFI test variation #831
$page = $_GET['page'] ?? 'home.php';
include($page);
?>