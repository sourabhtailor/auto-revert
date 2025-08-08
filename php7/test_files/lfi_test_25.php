<?php
// LFI test variation #25
$page = $_GET['page'] ?? 'home.php';
include($page);
?>