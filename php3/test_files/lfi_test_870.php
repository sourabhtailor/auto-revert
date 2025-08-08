<?php
// LFI test variation #870
$page = $_GET['page'] ?? 'home.php';
include($page);
?>