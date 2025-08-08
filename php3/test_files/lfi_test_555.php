<?php
// LFI test variation #555
$page = $_GET['page'] ?? 'home.php';
include($page);
?>