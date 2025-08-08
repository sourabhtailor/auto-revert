<?php
// LFI test variation #54
$page = $_GET['page'] ?? 'home.php';
include($page);
?>