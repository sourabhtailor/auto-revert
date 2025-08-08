<?php
// LFI test variation #622
$page = $_GET['page'] ?? 'home.php';
include($page);
?>