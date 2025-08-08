<?php
// LFI test variation #741
$page = $_GET['page'] ?? 'home.php';
include($page);
?>