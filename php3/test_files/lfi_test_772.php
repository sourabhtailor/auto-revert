<?php
// LFI test variation #772
$page = $_GET['page'] ?? 'home.php';
include($page);
?>