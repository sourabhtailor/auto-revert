<?php
// LFI test variation #761
$page = $_GET['page'] ?? 'home.php';
include($page);
?>