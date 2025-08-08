<?php
// LFI test variation #758
$page = $_GET['page'] ?? 'home.php';
include($page);
?>