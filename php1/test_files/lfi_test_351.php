<?php
// LFI test variation #351
$page = $_GET['page'] ?? 'home.php';
include($page);
?>