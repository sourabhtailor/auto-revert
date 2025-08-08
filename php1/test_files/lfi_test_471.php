<?php
// LFI test variation #471
$page = $_GET['page'] ?? 'home.php';
include($page);
?>