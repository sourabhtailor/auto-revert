<?php
// LFI test variation #670
$page = $_GET['page'] ?? 'home.php';
include($page);
?>