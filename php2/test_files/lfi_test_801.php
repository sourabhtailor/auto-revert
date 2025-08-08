<?php
// LFI test variation #801
$page = $_GET['page'] ?? 'home.php';
include($page);
?>