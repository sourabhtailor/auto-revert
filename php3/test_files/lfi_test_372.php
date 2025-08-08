<?php
// LFI test variation #372
$page = $_GET['page'] ?? 'home.php';
include($page);
?>