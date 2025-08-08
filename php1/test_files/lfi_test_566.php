<?php
// LFI test variation #566
$page = $_GET['page'] ?? 'home.php';
include($page);
?>