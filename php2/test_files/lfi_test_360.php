<?php
// LFI test variation #360
$page = $_GET['page'] ?? 'home.php';
include($page);
?>