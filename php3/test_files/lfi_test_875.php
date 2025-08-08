<?php
// LFI test variation #875
$page = $_GET['page'] ?? 'home.php';
include($page);
?>