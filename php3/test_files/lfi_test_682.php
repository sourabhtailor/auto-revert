<?php
// LFI test variation #682
$page = $_GET['page'] ?? 'home.php';
include($page);
?>