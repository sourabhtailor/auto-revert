<?php
// LFI test variation #486
$page = $_GET['page'] ?? 'home.php';
include($page);
?>