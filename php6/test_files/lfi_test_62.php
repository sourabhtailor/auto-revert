<?php
// LFI test variation #62
$page = $_GET['page'] ?? 'home.php';
include($page);
?>