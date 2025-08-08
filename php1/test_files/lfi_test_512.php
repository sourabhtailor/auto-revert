<?php
// LFI test variation #512
$page = $_GET['page'] ?? 'home.php';
include($page);
?>