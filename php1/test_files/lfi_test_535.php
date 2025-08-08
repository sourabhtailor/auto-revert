<?php
// LFI test variation #535
$page = $_GET['page'] ?? 'home.php';
include($page);
?>