<?php
// LFI test variation #998
$page = $_GET['page'] ?? 'home.php';
include($page);
?>