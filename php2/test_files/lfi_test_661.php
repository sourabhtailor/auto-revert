<?php
// LFI test variation #661
$page = $_GET['page'] ?? 'home.php';
include($page);
?>