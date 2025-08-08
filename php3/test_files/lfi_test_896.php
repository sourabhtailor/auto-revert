<?php
// LFI test variation #896
$page = $_GET['page'] ?? 'home.php';
include($page);
?>