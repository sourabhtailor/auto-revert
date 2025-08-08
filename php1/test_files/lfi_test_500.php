<?php
// LFI test variation #500
$page = $_GET['page'] ?? 'home.php';
include($page);
?>