<?php
// LFI test variation #681
$page = $_GET['page'] ?? 'home.php';
include($page);
?>