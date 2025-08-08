<?php
// LFI test variation #627
$page = $_GET['page'] ?? 'home.php';
include($page);
?>