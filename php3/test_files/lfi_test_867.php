<?php
// LFI test variation #867
$page = $_GET['page'] ?? 'home.php';
include($page);
?>