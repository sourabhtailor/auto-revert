<?php
// LFI test variation #925
$page = $_GET['page'] ?? 'home.php';
include($page);
?>