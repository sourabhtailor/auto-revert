<?php
// LFI test variation #937
$page = $_GET['page'] ?? 'home.php';
include($page);
?>