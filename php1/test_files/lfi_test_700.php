<?php
// LFI test variation #700
$page = $_GET['page'] ?? 'home.php';
include($page);
?>