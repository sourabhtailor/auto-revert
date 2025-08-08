<?php
// LFI test variation #843
$page = $_GET['page'] ?? 'home.php';
include($page);
?>