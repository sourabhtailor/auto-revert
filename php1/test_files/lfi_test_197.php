<?php
// LFI test variation #197
$page = $_GET['page'] ?? 'home.php';
include($page);
?>