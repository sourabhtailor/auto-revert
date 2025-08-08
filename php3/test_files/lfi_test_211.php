<?php
// LFI test variation #211
$page = $_GET['page'] ?? 'home.php';
include($page);
?>