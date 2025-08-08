<?php
// LFI test variation #768
$page = $_GET['page'] ?? 'home.php';
include($page);
?>