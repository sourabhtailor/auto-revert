<?php
// LFI test variation #455
$page = $_GET['page'] ?? 'home.php';
include($page);
?>