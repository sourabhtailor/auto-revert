<?php
// LFI test variation #730
$page = $_GET['page'] ?? 'home.php';
include($page);
?>