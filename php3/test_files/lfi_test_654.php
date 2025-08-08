<?php
// LFI test variation #654
$page = $_GET['page'] ?? 'home.php';
include($page);
?>