<?php
// LFI test variation #203
$page = $_GET['page'] ?? 'home.php';
include($page);
?>