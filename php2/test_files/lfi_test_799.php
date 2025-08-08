<?php
// LFI test variation #799
$page = $_GET['page'] ?? 'home.php';
include($page);
?>