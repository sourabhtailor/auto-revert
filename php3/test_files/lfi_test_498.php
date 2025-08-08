<?php
// LFI test variation #498
$page = $_GET['page'] ?? 'home.php';
include($page);
?>