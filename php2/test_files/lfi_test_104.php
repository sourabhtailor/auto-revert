<?php
// LFI test variation #104
$page = $_GET['page'] ?? 'home.php';
include($page);
?>