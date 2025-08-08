<?php
// LFI test variation #691
$page = $_GET['page'] ?? 'home.php';
include($page);
?>