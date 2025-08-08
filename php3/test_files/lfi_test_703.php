<?php
// LFI test variation #703
$page = $_GET['page'] ?? 'home.php';
include($page);
?>