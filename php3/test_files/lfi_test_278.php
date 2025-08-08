<?php
// LFI test variation #278
$page = $_GET['page'] ?? 'home.php';
include($page);
?>