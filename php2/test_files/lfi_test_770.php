<?php
// LFI test variation #770
$page = $_GET['page'] ?? 'home.php';
include($page);
?>