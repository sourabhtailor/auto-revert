<?php
// LFI test variation #435
$page = $_GET['page'] ?? 'home.php';
include($page);
?>