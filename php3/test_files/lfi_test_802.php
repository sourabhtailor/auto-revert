<?php
// LFI test variation #802
$page = $_GET['page'] ?? 'home.php';
include($page);
?>