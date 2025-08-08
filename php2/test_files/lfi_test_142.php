<?php
// LFI test variation #142
$page = $_GET['page'] ?? 'home.php';
include($page);
?>