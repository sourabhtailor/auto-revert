<?php
// LFI test variation #601
$page = $_GET['page'] ?? 'home.php';
include($page);
?>