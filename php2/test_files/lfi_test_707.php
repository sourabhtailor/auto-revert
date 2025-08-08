<?php
// LFI test variation #707
$page = $_GET['page'] ?? 'home.php';
include($page);
?>