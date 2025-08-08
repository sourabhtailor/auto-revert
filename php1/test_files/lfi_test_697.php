<?php
// LFI test variation #697
$page = $_GET['page'] ?? 'home.php';
include($page);
?>