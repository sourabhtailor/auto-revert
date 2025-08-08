<?php
// LFI test variation #839
$page = $_GET['page'] ?? 'home.php';
include($page);
?>