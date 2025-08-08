<?php
// LFI test variation #916
$page = $_GET['page'] ?? 'home.php';
include($page);
?>