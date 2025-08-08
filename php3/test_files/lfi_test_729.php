<?php
// LFI test variation #729
$page = $_GET['page'] ?? 'home.php';
include($page);
?>