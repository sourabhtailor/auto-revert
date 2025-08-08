<?php
// LFI test variation #632
$page = $_GET['page'] ?? 'home.php';
include($page);
?>