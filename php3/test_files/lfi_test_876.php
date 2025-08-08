<?php
// LFI test variation #876
$page = $_GET['page'] ?? 'home.php';
include($page);
?>