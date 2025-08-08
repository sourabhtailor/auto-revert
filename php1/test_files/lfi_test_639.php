<?php
// LFI test variation #639
$page = $_GET['page'] ?? 'home.php';
include($page);
?>