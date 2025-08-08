<?php
// LFI test variation #919
$page = $_GET['page'] ?? 'home.php';
include($page);
?>