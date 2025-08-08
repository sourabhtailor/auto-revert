<?php
// LFI test variation #778
$page = $_GET['page'] ?? 'home.php';
include($page);
?>